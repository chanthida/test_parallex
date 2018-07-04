<?php

namespace App\Http\Controllers;

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
//        $menus =  Menus::where('active', 1)
//            ->where('show_on_menu', 1)
//            ->get();
//
//        $profile = Profile::first();

        return view('welcome'/*, ['menus' => $menus , 'profile' => $profile]*/);
    }

}
