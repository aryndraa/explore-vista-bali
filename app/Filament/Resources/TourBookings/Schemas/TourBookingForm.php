<?php

namespace App\Filament\Resources\TourBookings\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class TourBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make([
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'cancelled' => 'Cancelled',
                                'completed' => 'Completed',
                            ])
                            ->default('pending')
                            ->required()
                            ->native(false)
                            ->disablePlaceholderSelection()
                            ->columnSpanFull()
                            ->columnSpanFull(),

                        Select::make('agent_id')
                            ->relationship('agent', 'name')
                            ->searchable()
                            ->preload()
                            ->label('Handled by Agent')
                            ->nullable(),

                          Actions::make([
                            Action::make('sendEmail')
                                ->visible(fn ($record) => filled($record?->agent_id))
                                ->label('Send email to agent')
                                ->icon('heroicon-o-envelope')
                                ->requiresConfirmation()
                                ->action(function ($record, $livewire) {
                                    if (! $record->agent) {
                                        Notification::make()
                                            ->title('Gagal')
                                            ->body('Tidak ada agent yang dipilih.')
                                            ->danger()
                                            ->send();

                                        return;
                                    }

                                    \Mail::to($record->agent->email)->send(
                                        new \App\Mail\TourBookingAssigned($record)
                                    );

                                    Notification::make()
                                        ->title('Sukses')
                                        ->body('Email succesfully send to ' . $record->agent->name)
                                        ->success()
                                        ->send();
                                }),
                            ])
                            ->hiddenOn(['create', 'edit']),
                    ]), 
                    Section::make([
                        TextInput::make('customer_name')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('address')
                            ->autosize()
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('customer_phone')
                            ->tel()
                            ->required(),
                        TextInput::make('customer_email')
                            ->email()
                            ->required(),
                        DatePicker::make('booking_date')
                            ->required(),
                        TextInput::make('people_amount')
                            ->required()
                            ->numeric(),
                    ])
                    ->columns(2),
                ])
                ->columnSpan(3),


                Section::make([
                    Select::make('package_id')
                        ->label('Package')
                        ->relationship('package', 'name')
                        ->preload()
                        ->searchable()
                        ->required(),
                    
                    Group::make([
                            SpatieMediaLibraryFileUpload::make('image')
                            ->label("Package Image")
                            ->hiddenOn(['create','edit'])
                            ->collection('packages'),
                        ])
                        ->relationship('package'),
                ])
                ->columnSpan(2)
            ])
            ->columns(5);
    }
}
