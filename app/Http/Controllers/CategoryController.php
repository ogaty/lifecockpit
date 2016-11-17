<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SidenavController;

class CategoryController extends Controller
{
    //
    public function show($category) {
        $categoryInfo = \App\Models\TcCategories::findOrFail($category);
        $sideinfo = \App\Http\Controllers\SidenavController::sidenav();

        return view('categories/' . $categoryInfo->category,
                   [
                       'title' => $categoryInfo->jpname,
                       'pagetitle' => $categoryInfo->jpname,
                       'categories' => $sideinfo['categories']
                   ]);
    }
}
