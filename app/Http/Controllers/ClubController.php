<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * @param Club $club_model
     * @return View|Factory|Application
     */
    public function index(Club $club_model): View|Factory|Application
    {
        $club_list = $club_model->paginate(5);

        return view('dashboard.index', [
                'club_list' => $club_list
            ]
        );
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('club.create');
    }

    /**
     * @param Request $request
     * @param Club $club_model
     * @return RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, Club $club_model): RedirectResponse
    {
        $this->validate(request(), [
            'name' => 'required',
            'city' => 'required',
            'budget' => 'required',
        ]);

        $name = $request->get('name');
        $city = $request->get('city');
        $budget = $request->get('budget');

        $club = $club_model->firstOrNew(['name' => $name, 'city' => $city, 'budget' => $budget]);
        $club->saveOrFail();

        return redirect()->route('club.index');
    }

    public function update()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    /**
     * @param int $id
     * @param Club $club_model
     * @return RedirectResponse
     */
    public function destroy(int $id, Club $club_model): RedirectResponse
    {
        try {
            $club = $club_model->find($id);
            $club->delete();

            return redirect()->route('club.index');
        } catch (\Throwable $e) {
            return back()->withErrors(['message' => 'error try again']);
        }
    }
}
