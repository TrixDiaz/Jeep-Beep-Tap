<?php

namespace App\Filament\Widgets;

use App\Models\Usage;
use Filament\Widgets\ChartWidget;

class DeviceUsageChart extends ChartWidget
{
    protected static ?string $heading = 'Device Usage Chart';

    protected function getData(): array
    {
        // Select all rows where device is 'mobile' or 'desktop'
        $mobileCount = Usage::where('Usage', 'Mobile')->count();
        $desktopCount = Usage::where('Usage', 'Desktop')->count();
        $colors = ['#FF5733', '#FFFF66', '#3399FF']; // Define your custom colors
        return [
            'datasets' => [
                [
                    'label' => 'Device Usage Chart',
                    'data' => [$mobileCount, $desktopCount],
                    'backgroundColor' => $colors,
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Mobile','Desktop', ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
