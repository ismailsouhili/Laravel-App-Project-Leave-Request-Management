<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Conges;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class CongerController extends Controller
{
    public function index()
    {
        
        //$conge=Conges::all();
        
        $id = Auth::user()->id;
        $conge=Conges::where('user_ID',$id)->get();
        //$user = DB::table('holidays')->where('user_ID', Auth::user()->id)->SUM('total_days');
        return view('user.conger.index',compact('conge') );
    }

    public function add()
    {
        $user = DB::table('holidays')->where('user_ID', Auth::user()->id)->where('status', '=', 'Accepté')->SUM('total_days');
        return view('user.conger.add', compact('user'));
    }

    public function insert(Request $request)
    {
        $conge=new Conges();
        if($request->hasFile('certificate'))
        {
            $file=$request->file('certificate');
            $ext= $file->getClientOriginalExtension();
           // $filename=time(). '.' . $ext;
           // $file->move('C:\Users\tala_\laravel\gestionconger\storage\certificate/'. $filename);
          
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/certificate/'), $filename);
            $conge->certificate=$filename;
        }
        $id = Auth::user()->id;
        $conge->user_ID=$id;
        $conge->start=$request->input('start'); 
        $conge->end=$request->input('end'); 
        $conge->type=$request->input('type');

        $start = \Carbon\Carbon::parse($request->input('start'));
        $end = \Carbon\Carbon::parse($request->input('end'));
        $days = $start->diffInWeekdays($end);
        $conge->total_days=$days+1;

        $conge->save();
        return redirect('conger')->with('status','Votre demande est envoyée avec succès');
    }

    public function edit($id)
    {
        $conge = Conges::find($id);
        return view('user.conger.edit', compact('conge'));
    }

    public function update(Request $request, $id)
    {
        $conge=Conges::find($id);
        if($request->hasFile('certificate'))
        {
            $path='assets/uploads/certificate'.$conge->certificate;
            if(file_exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('certificate');
            $ext= $file->getClientOriginalExtension();
            $filename=time(). '.' . $ext;
            $file->move('assets/uploads/certificate/'. $filename);
            $conge->certificate=$filename;
        }
        
        $conge->start=$request->input('start'); 
        $conge->end=$request->input('end'); 
        $conge->type=$request->input('type');
        $conge->update();
        return redirect('conger')->with('status','Modifier avec succès');
    }

    public function destroy($id)
    {
        $conge = Conges::find($id);
        
        $conge->delete();
        return redirect('conger')->with('status','Supprimer avec succès');
    }

   
}
