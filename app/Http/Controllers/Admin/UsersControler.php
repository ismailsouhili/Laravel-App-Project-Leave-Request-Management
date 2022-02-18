<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersControler extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('admin.user.index', compact('users'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function insert(Request $request)
    {
        $users=new User();

        $users->name=$request->input('name'); 
        $users->fname=$request->input('fname'); 
        $users->email=$request->input('email'); 
        $users->password=$request->input('password');
        $users->holidays=$request->input('holidays'); 
        $users->start_work=$request->input('start_work'); 
        $users->salary=$request->input('salary');
        $users->save();
        return redirect('users')->with('status','Ajouter avec succès');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users=User::find($id);
        
        $users->name=$request->input('name'); 
        $users->fname=$request->input('fname'); 
        $users->email=$request->input('email'); 
        $users->password=$request->input('password');
        $users->holidays=$request->input('holidays'); 
        $users->start_work=$request->input('start_work'); 
        $users->salary=$request->input('salary');
        $users->update();
        return redirect('users')->with('status','Modifier avec succès');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        
        $users->delete();
        return redirect('users')->with('status','Supprimer avec succès');
    }

}
