<?php

namespace App\Http\Controllers;

use App\Utils\DynamicFunctionCaller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display the index page.
     *
     * @return Inertia\Inertia;
     */
    public function index()
    {
        return Inertia::render('Index');
    }

    /**
     * Display the page resource.
     *
     * @param string $slug
     * @return Inertia\Inertia;
     */
    public function page($slug = '')
    {
        $pages = collect(config('pages'));
        $page = $pages->where('active', true)->where('slug', $slug)->first();
        if (empty($page)) {
            return redirect('/');
        }

        $response = DynamicFunctionCaller::call($page['method']);
        return Inertia::render('Dashboard', [
            'domains' => $page,
            'data' => $response
        ]);
    }

    /**
     * Execute action to slug page.
     *
     * @param Request $request
     * @return Inertia\Inertia;
     */
    public function action(Request $request)
    {
        $validated = $request->validate([
            'method' => ['required'],
            'params' => ['required'],
        ]);

        $response = DynamicFunctionCaller::call($validated['method'], $validated['params']);
        return response()->json($response, 200);
    }
}
