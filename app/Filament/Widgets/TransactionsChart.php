<?php

namespace App\Filament\Widgets;

use App\Models\Transactions;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TransactionsChart extends ChartWidget
{
    protected static ?string $heading = 'Total Transactions Per Day';

    protected function getData(): array
    {
            $transaction = Transactions::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('SUM(total_price) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
                'datasets' => [
                    [
                        'label' => 'Total Transactions',
                        'data' => $transaction->pluck('total'),
                    ],
                ],
            'labels' => $transaction->pluck('date'),
            ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
