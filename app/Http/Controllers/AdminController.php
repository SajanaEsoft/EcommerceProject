<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function view_category()
    {
        return view('admin.category');
    }

    public function add_category(Request $request)
    {
        $data = new category();  //this data storing category model
        $data->category_name = $request->category; //data showing table name column , request showing blade text field has that name
        $data->save();  //storing into the table
        //return redirect()->back();  //reload the page again
        return redirect()->back()->with('message','Category Succesfully Created');  //this message function catch from admin controller and show into the category blade below the content-wrapper over the session
    }
}
