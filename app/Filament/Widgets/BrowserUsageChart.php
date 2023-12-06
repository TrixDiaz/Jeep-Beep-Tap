<?php

namespace App\Filament\Widgets;

use App\Models\Usage;
use Filament\Widgets\ChartWidget;

class BrowserUsageChart extends ChartWidget
{
    protected static ?string $heading = 'Browser Usage Chart';

    protected function getData(): array
    {
        // Select all rows where device is 'mobile' or 'desktop'
        $chrome = Usage::where('browser', 'Chrome')->count();
        $ie = Usage::where('browser', 'Edge')->count();
        $firefox = Usage::where('browser', 'Firefox')->count();
        $safari = Usage::where('browser', 'Safari')->count();
        $colors = ['#FF5733', '#007BFF', '#28A745', '#FFC107']; // Define your cus                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               tom colors

        return [
            'datasets' => [
                [
                    'label' => 'Browser Usage',
                    'data' => [$chrome, $ie, $firefox, $safari],
                    'backgroundColor' => $colors,
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Chome', 'Edge', 'Firefox', 'Safari'],
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }
}
