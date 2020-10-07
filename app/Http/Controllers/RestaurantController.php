<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Users;
use Session;
use Crypt;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list', ["data" => $data]);
    }
    
    /* Add Resto  data save In DB*/

    function add(Request $req)
    {
        $resto= new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        Session::flash('status', 'Restaurent added succesfully');
        return redirect('list');
    }
    
    /*Delete Data from List ANd DB*/

    function delete($id) 
    {
        Restaurant::find($id)->delete();
        Session::flash('status', 'Restaurant Deleted Successfully');
        return redirect('list');
    }
    /* Edit  Restaurant*/

    function edit($id) 
    {
       $data = Restaurant::find($id);
        return view('edit', ['data'=>$data]);
    }
    
    /* Update Restaurant data save In DB and List*/

    function update(Request $req)
    {
        $resto= Restaurant::find($req->input('id'));
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        Session::flash('status', 'Restaurent Updated succesfully');
        return redirect('list');
    }

    /* User Registration data save In DB*/

    function register(Request $req) 
    {
        $user= new Users;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->contactno=$req->input('contactno');
        $user->save();
        Session::put('user', $req->input('name'));
        return redirect('/');
    }
    function login(Request $req)
    {
        $user= Users::where("email", $req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)== $req->input('password'))
        {
            Session::put('user', $user[0]->name);
            return redirect('/');
        }
    }
    
}