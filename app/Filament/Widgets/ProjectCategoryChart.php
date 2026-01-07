<?php

namespace App\Filament\Widgets;

use App\Models\Portfolio;
use Filament\Widgets\ChartWidget;

class ProjectCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Projects by Category';
    
    protected static ?int $sort = 5;
    
    protected int | string | array $columnSpan = 1;

    protected function getData(): array
    {
        $categories = Portfolio::all()->groupBy('category');
        
        $labels = [];
        $data = [];
        $colors = [
            'rgba(162, 89, 255, 0.8)',
            'rgba(0, 224, 255, 0.8)',
            'rgba(78, 205, 196, 0.8)',
            'rgba(255, 107, 107, 0.8)',
            'rgba(255, 217, 61, 0.8)',
        ];
        
        foreach ($categories as $category => $projects) {
            $labels[] = $category ?: 'Other';
            $data[] = $projects->count();
        }
        
        return [
            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => $data,
                    'backgroundColor' => array_slice($colors, 0, count($data)),
                    'borderWidth' => 0,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
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
