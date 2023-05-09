<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Responbility;

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
        $grafik = $data = Responbility::where('status', 1)
            ->whereHas('rule',function($query){
                $query->whereHas('torule',function($query){
                    $query->whereIn('role_id',Auth()->user()->userrole->pluck('role_id')->toarray());
                });
            })->orderBy('created_at', 'desc')->get();
        
        $labels = $grafik->pluck('status')->map(function ($status) {
            return $status == 0 ? 'Uncompleted' : 'Completed';
        })->toArray();
        
        
        $colors = ['#4AE64F', '#36A2EB'];
        
        return $this->chart->BarChart()
            ->setTitle('Communication')
            ->setLabels($labels)
            ->setColors($colors);
    }
}
