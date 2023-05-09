<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommunicationChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $userId = Auth::user()->id;
        $data = [];
        $grafik = DB::table('responsbilities')
            ->select(DB::raw('status, COUNT(*) as total'))
            ->groupBy('status')
            ->get();
        
        $labels = $grafik->pluck('status')->map(function ($status) {
            return $status == 0 ? 'Uncompleted' : 'Completed';
        })->toArray();
        
        $data = $grafik->pluck('total')->toArray();
        
        $colors = ['#4AE64F', '#36A2EB'];
        
        return $this->chart->BarChart()
            ->setTitle('Communication')
            ->addData('Total', $data)
            ->setLabels($labels)
            ->setColors(['#4AE64F', '#ff6384']);
    }
}
