<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Statistics\StatisticRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $repository;

    /**
     * Dashboard Controller constructor.
     */
    public function __construct(StatisticRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display of the statistic report.
     */
    public function index()
    {
        $data = $this->repository->allStatistic();
        return view('pages.dashboard', $data);
    }
}
