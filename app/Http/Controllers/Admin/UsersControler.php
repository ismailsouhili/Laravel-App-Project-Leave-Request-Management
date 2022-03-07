<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Carbon\CarbonPeriod;

class UsersControler extends Controller
{

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    
    public function index(Schedule $schedule)
    { 
      //  $day = Carbon::now()->format('d');

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
        $users->holidays=0;
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

        $Nbholidays = DB::table('holidays')->where('user_ID', $id)->SUM('total_days');
        $users->holidays=$Nbholidays;

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
