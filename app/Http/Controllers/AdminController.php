<?php

namespace App\Http\Controllers;

use App\Models\MenuContents;
use App\Models\Menus;
use App\Models\Profile;
use Carbon\Carbon;
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

    public function about()
    {
        $result =  Menus::where('slug','about')->first();
        $resultContents =  MenuContents::where('menu_id',$result->id)->get();
        return view('admin.cus_about',['resultContents' => $resultContents]);
    }

    public function aboutEdit($id)
    {
        $result =  MenuContents::where('id',$id)->first();
        return view('admin.cus_edit_about',['result' => $result]);
    }

    public function cusPage($slug){
        $result =  Menus::where('slug',$slug)->first();
        $resultContents =  MenuContents::where('menu_id',$result->id)
            ->where('deleted_at',NULL)->get();
        return view('admin.cus_page',[
            'resultContents' => $resultContents,
            'slug' => $slug
        ]);
    }

    public function cusPageEdit($slug,$id)
    {
        $result =  MenuContents::where('id',$id)->first();
        return view('admin.cus_edit',[
            'result' => $result,
        'slug' => $slug
        ]);
    }

    public function cusPageAdd($slug)
    {
        return view('admin.cus_add',[
            'slug' => $slug
        ]);
    }

    public function cusSave(Request $request){

        $menuContent = MenuContents::find($request->id);

        $menuContent->icon = $request->edit_icon;
        $menuContent->header = $request->edit_header;
        $menuContent->content = $request->edit_content;
        $menuContent->sub_content = $request->edit_sub_content;
        $menuContent->img = $request->edit_img;
        $menuContent->id_tag = $request->edit_id_tag;
        $menuContent->id_tag2 = $request->edit_id_tag2;
        $menuContent->description = $request->edit_description;
        $menuContent->percent_data = $request->edit_percent_data;

        $menuContent->save();

        return redirect()->back()->with('message', 'Update Success');;
    }

    public function cusAdd(Request $request){
        $menu_id =  Menus::where('slug',$request->slug)->first()->id;

        $menuContent = new MenuContents();

        $menuContent->menu_id = $menu_id;
        $menuContent->icon = $request->edit_icon;
        $menuContent->header = $request->edit_header;
        $menuContent->content = $request->edit_content;
        $menuContent->sub_content = $request->edit_sub_content;
        $menuContent->img = $request->edit_img;
        $menuContent->id_tag = $request->edit_id_tag;
        $menuContent->id_tag2 = $request->edit_id_tag2;
        $menuContent->description = $request->edit_description;
        $menuContent->percent_data = $request->edit_percent_data;

        $menuContent->save();

        return  redirect('admin/cus/'.$request->slug)->with('message', 'Add Success');
    }

    public function profile(){
        $result =  Profile::first();

        return view('admin.profile',['result' => $result]);
    }

    public function profileSave(Request $request){

        $profile = Profile::find($request->id);

        $profile->name = $request->name;
        $profile->img = $request->img;
        $profile->description = $request->description;


        $profile->save();

        return redirect()->back()->with('message', 'Update Success');;
    }

    public function deleteMenuContent(Request $request){
        $model = MenuContents::find($request->get('id'));
        $model->deleted_at = Carbon::now();
        $model->save();

    }

    public function menu(){
        $menus =  Menus::get();
        return view('admin.menus',[
            'menus' => $menus
        ]);
    }

    public function menuEdit($id){
        $result =  Menus::where('id',$id)->first();
        return view('admin.menu_edit',[
            'result' => $result
        ]);
    }

    public function MenuSave(Request $request){
        if($request->edit_active == "on"){
            $active = 1;
        }else{
            $active = 0;
        }

        $menu = Menus::find($request->id);

        $menu->name = $request->edit_name;
        $menu->header = $request->edit_header;
        $menu->description = $request->edit_description;
        $menu->text = $request->edit_text;
        $menu->active = $active;

        $menu->save();

        return redirect()->back()->with('message', 'Update Success');;
    }
}
