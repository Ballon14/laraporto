<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        $portfolioCount = Portfolio::count();
        $skillCount = Skill::count();
        $experienceCount = Experience::count();
        $featuredCount = Portfolio::where('featured', true)->count();
        
        return [
            Stat::make('Total Projects', $portfolioCount)
                ->description('Portfolio items')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, $portfolioCount]),
                
            Stat::make('Skills', $skillCount)
                ->description('Technologies mastered')
                ->descriptionIcon('heroicon-o-code-bracket')
                ->color('success')
                ->chart([2, 4, 6, 8, $skillCount]),
                
            Stat::make('Experience', $experienceCount)
                ->description('Work experiences')
                ->descriptionIcon('heroicon-o-building-office')
                ->color('warning')
                ->chart([1, 2, 3, $experienceCount]),
                
            Stat::make('Featured Projects', $featuredCount)
                ->description('Highlighted works')
                ->descriptionIcon('heroicon-o-star')
                ->color('danger')
                ->chart([1, 2, $featuredCount]),
        ];
    }
}
