<?php

namespace App\Filament\Resources\TourBookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TourBookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')
                    ->searchable(),
                TextColumn::make('package.name')
                    ->searchable(),
                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('people_amount')
                    ->numeric()
                    ->suffix(' Person')
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => ucfirst($state))
                    ->color(fn ($state) => match ($state) {
                        'pending'   => 'warning',
                        'confirmed' => 'success',
                        'cancelled' => 'danger',
                        'completed' => 'info',
                        'expired'   => 'secondary',
                        'ongoing'   => 'primary',
                        default     => 'gray',
                    })
                    ->tooltip(fn ($state) => match ($state) {
                        'pending'   => 'Waiting for payment or confirmation.',
                        'confirmed' => 'Booking has been confirmed and paid.',
                        'cancelled' => 'Booking has been cancelled.',
                        'completed' => 'The trip has been completed.',
                        'expired'   => 'Booking expired due to timeout.',
                        'ongoing'   => 'The trip is currently in progress.',
                        default     => 'Unknown status.',
                    }),
                TextColumn::make('created_at')
                    ->date()
                    ->label('Created at')
                    ->sortable()
            ])
            ->filters([
                SelectFilter::make('package')
                    ->relationship('package', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Package'),

                Filter::make('booking_date')
                    ->form([
                         Section::make([
                            DatePicker::make('from')->label('From Date'),
                            DatePicker::make('until')->label('Until Date'),
                        ])
                        ->columns(2)
                        ->columnSpanFull()
                        ->label('Booking Date'),
                    ])
                    ->columns(2)
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn ($q, $date) => $q->whereDate('booking_date', '>=', $date))
                            ->when($data['until'], fn ($q, $date) => $q->whereDate('booking_date', '<=', $date));
                    })
                    ->indicateUsing(function (array $data): ?string {
                        if ($data['from'] && $data['until']) {
                            return 'Booking between ' . $data['from'] . ' - ' . $data['until'];
                        }
                        if ($data['from']) {
                            return 'Booking from ' . $data['from'];
                        }
                        if ($data['until']) {
                            return 'Booking until ' . $data['until'];
                        }
                        return null;
                    }),

                Filter::make('created_at')
                    ->form([
                          Section::make([
                            DatePicker::make('from')->label('From Date'),
                            DatePicker::make('until')->label('Until Date'),
                        ])
                        ->columns(2)
                        ->columnSpanFull()
                        ->label('Book Created Date'),
                    ])
                    ->columns(2)
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn ($q, $date) => $q->whereDate('created_at', '>=', $date))
                            ->when($data['until'], fn ($q, $date) => $q->whereDate('created_at', '<=', $date));
                    })
                    ->indicateUsing(function (array $data): ?string {
                        if ($data['from'] && $data['until']) {
                            return 'Created between ' . $data['from'] . ' - ' . $data['until'];
                        }
                        if ($data['from']) {
                            return 'Created from ' . $data['from'];
                        }
                        if ($data['until']) {
                            return 'Created until ' . $data['until'];
                        }
                        return null;
                    }),
            ])
            ->filtersFormWidth('lg')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
