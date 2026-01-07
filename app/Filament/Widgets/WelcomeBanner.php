<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class WelcomeBanner extends Widget
{
    protected static ?int $sort = 0;
    
    protected int | string | array $columnSpan = 'full';
    
    protected static string $view = 'filament.widgets.welcome-banner';
}
