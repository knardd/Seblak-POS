<?php

namespace App\Filament\Widgets;

use App\Models\Transactions;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RevenueChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $todayRevenue = Transactions::whereDate('created_at', Carbon::today())
            ->sum('total_price');
        return [
            Stat::make('Today Revenue', 'Rp ' . number_format($todayRevenue, 0, ',', '.')),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
