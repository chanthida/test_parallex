<?php

namespace App\Http\Controllers;

use App\Models\MenuContents;
use App\Models\Menus;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        $result =  Menus::where('slug','home')->first();
        $resultContents =  MenuContents::where('menu_id',$result->id)->get();
        return view('admin.cus_home',['resultContents' => $resultContents]);
    }

    public function homeEdit($id)
    {
        $result =  MenuContents::where('id',$id)->first();
        return view('admin.cus_edit_home',['result' => $result]);
    }

    public function save(Request $request){

        $menuContent = MenuContents::find($request->id);

        $menuContent->header = $request->edit_header;
        $menuContent->content = $request->edit_content;
        $menuContent->img = $request->edit_img;

        $menuContent->save();

        return redirect()->back()->with('message', 'Success');;
    }
}
