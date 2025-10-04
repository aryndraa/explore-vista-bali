<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Contracts\View\View;

class Dashboard extends BaseDashboard
{
    use BaseDashboard\Concerns\HasFiltersForm;

    use InteractsWithPageFilters;

    protected static string|BackedEnum|null $navigationIcon = 'gmdi-home-r';

    protected function getHeaderWidgets(): array
    {
        return [
        ];
    }

    public function filtersForm(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        Select::make('time_range')
                            ->options([
                                'today' => 'Today',
                                'week'  => 'This Week',
                                'month' => 'This Month',
                                'year'  => 'This Year',
                            ])
                            ->default('today')
                            ->placeholder('-')
                            ->label('Filter by Time Range'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}