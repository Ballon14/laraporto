<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use Filament\Widgets\ChartWidget;

class SkillLevelChart extends ChartWidget
{
    protected static ?string $heading = 'Top Skills by Proficiency';
    
    protected static ?int $sort = 4;
    
    protected int | string | array $columnSpan = 1;

    protected function getData(): array
    {
        $skills = Skill::orderBy('level', 'desc')->take(8)->get();
        
        return [
            'datasets' => [
                [
                    'label' => 'Proficiency Level',
                    'data' => $skills->pluck('level')->toArray(),
                    'backgroundColor' => [
                        'rgba(162, 89, 255, 0.8)',
                        'rgba(0, 224, 255, 0.8)',
                        'rgba(78, 205, 196, 0.8)',
                        'rgba(255, 107, 107, 0.8)',
                        'rgba(255, 217, 61, 0.8)',
                        'rgba(107, 203, 119, 0.8)',
                        'rgba(77, 150, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)',
                    ],
                    'borderColor' => 'rgba(162, 89, 255, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $skills->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
    
    protected function getOptions(): array
    {
        return [
            'indexAxis' => 'y',
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
            'scales' => [
                'x' => [
                    'max' => 100,
                ],
            ],
        ];
    }
}
