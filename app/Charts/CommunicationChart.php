<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class CommunicationChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->addData('San Francisco', [6, 9])
            ->setXAxis(['January', 'February']);
    }
}
