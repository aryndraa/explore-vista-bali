<?php

namespace App\Filament\Resources\ShuttleBookings\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ShuttleBookingForm
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
                                    new \App\Mail\ShuttleBookingAssigned($record)
                                );

                                Notification::make()
                                    ->title('Sukses')
                                    ->body('Email succesfully send to  ' . $record->agent->name)
                                    ->success()
                                    ->send();
                            }),
                        ])
                        ->hiddenOn(['create', 'edit']),
                    ]),

                    Section::make([
                        TextInput::make('customer_name')
                            ->required(),
                        TextInput::make('customer_phone')
                            ->tel()
                            ->required(),
                        TextInput::make('customer_email')
                            ->email()
                            ->required(),
                        TextInput::make('people_amount')
                            ->required()
                            ->numeric(),
                    ])
                ]),

                Group::make([
                    Section::make([
                        Select::make('shuttle_id')
                            ->label('Shuttle Package')
                            ->relationship('shuttle', 'name')
                            ->required()
                    ]),

                    Section::make([
                        DatePicker::make('booking_date')
                            ->required(),

                        TimePicker::make('pickup_time')
                            ->required()
                            ->suffix('WITA'),
                    
                        TextInput::make('from')
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('to')
                            ->required()    
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                    Section::make([
                        Select::make('vehicle_id')
                            ->relationship('vehicle', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        
                            Group::make([
                                SpatieMediaLibraryFileUpload::make('image')
                                    ->label('Vehicle Image')
                                    ->collection('vehicles') 
                                    ->image()
                                    ->maxFiles(1)
                                    ->imageCropAspectRatio('16:9')
                                    ->columnSpanFull()
                                    ->hiddenOn(['create','edit'])   
                                    ->required(),
                            ])
                            ->relationship('vehicle'),
                            
                    ])
                ])

            ]);
    }
}
