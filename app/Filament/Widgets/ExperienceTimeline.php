<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class ExperienceTimeline extends BaseWidget
{
    protected static ?int $sort = 6;
    
    protected int | string | array $columnSpan = 1;
    
    protected static ?string $heading = 'Experience Timeline';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Experience::query()->orderBy('start_date', 'desc')
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->weight('bold')
                    ->description(fn ($record) => $record->company),
                Tables\Columns\TextColumn::make('start_date')
                    ->date('M Y')
                    ->badge()
                    ->color('success'),
                Tables\Columns\IconColumn::make('current')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->trueColor('success')
                    ->label('Active'),
            ])
            ->paginated(false);
    }
}
