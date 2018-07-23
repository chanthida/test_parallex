<?php

namespace App\Http\Controllers;

use App\Models\MenuContents;
use App\Models\Menus;
use App\Models\Profile;
use Illuminate\Http\Request;
use Mail;
class WelcomeController extends Controller
{

    /**
     * Show the application first page.
     *
     */
    public function index()
    {
        $menus =  Menus::orderBy('sort_order')
            ->get();

        $profile = Profile::first();

        $sections = MenuContents::where('deleted_at',NULL)->get();

        return view('welcome', ['menus' => $menus , 'profile' => $profile, 'sections' => $sections]);
    }

}
