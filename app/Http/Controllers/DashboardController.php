<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * @param Club $club_model
     * @return View|Factory|Application
     */
    public function index(Club $club_model): View|Factory|Application
    {
        $club_list = $club_model->get();

        return view('dashboard.index', [
                'club_list' => $club_list
            ]
        );
    }
}
