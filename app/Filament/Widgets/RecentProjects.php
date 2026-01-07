<?php

namespace App\Filament\Widgets;

use App\Models\Portfolio;
use App\Models\Skill;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentProjects extends BaseWidget
{
    protected static ?int $sort = 2;
    
    protected int | string | array $columnSpan = 'full';
    
    protected static ?string $heading = 'Recent Projects';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Portfolio::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color('primary'),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->trueColor('warning'),
                Tables\Columns\TextColumn::make('technologies')
                    ->badge()
                    ->separator(',')
                    ->limitList(3),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->description(fn ($record) => $record->created_at->format('M d, Y')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn (Portfolio $record): string => route('filament.admin.resources.portfolios.edit', $record)),
            ]);
    }
}
