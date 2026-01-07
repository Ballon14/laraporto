<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use Filament\Widgets\ChartWidget;

class SkillCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Skills by Category';
    
    protected static ?int $sort = 3;
    
    protected int | string | array $columnSpan = 1;

    protected function getData(): array
    {
        $categories = Skill::all()->groupBy('category');
        
        $labels = [];
        $data = [];
        $colors = [
            '#a259ff', // primary - violet
            '#00e0ff', // secondary - cyan
            '#4ecdc4', // accent - teal
            '#ff6b6b', // danger - red
            '#ffd93d', // warning - yellow
            '#6bcb77', // success - green
            '#4d96ff', // info - blue
        ];
        
        $i = 0;
        foreach ($categories as $category => $skills) {
            $labels[] = $category ?: 'Uncategorized';
            $data[] = $skills->count();
            $i++;
        }
        
        return [
            'datasets' => [
                [
                    'label' => 'Skills',
                    'data' => $data,
                    'backgroundColor' => array_slice($colors, 0, count($data)),
                    'borderColor' => '#1a1a2e',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
    
    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
