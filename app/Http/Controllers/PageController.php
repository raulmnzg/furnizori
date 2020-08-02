<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Show a page
     *
     * @param Page $page
     * @return Application|Factory|View
     */
    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }
}
