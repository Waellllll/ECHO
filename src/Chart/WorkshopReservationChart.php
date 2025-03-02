<?php

// src/Chart/WorkshopReservationChart.php

namespace App\Chart;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class WorkshopReservationChart
{
    private $chartBuilder;

    public function __construct(ChartBuilderInterface $chartBuilder)
    {
        $this->chartBuilder = $chartBuilder;
    }

    public function createChart(array $workshopTitles, array $reservationCounts): Chart
    {
        $chart = $this->chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => $workshopTitles,
            'datasets' => [
                [
                    'label' => 'Number of Reservations',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                    'data' => $reservationCounts,
                ],
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
        ]);

        return $chart;
    }
}