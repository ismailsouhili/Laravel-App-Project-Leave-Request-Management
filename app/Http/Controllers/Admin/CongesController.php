<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conges;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\Response;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\App;

class CongesController extends Controller
{
    public function index()
    {
       // $conges=Conges::all();
       
       /* $holid= DB::table('holdiays')
        ->join('users', 'holdiays.user_ID', '=', 'users.id')
        ->select('holdiays.*','users.name')
        ->get();  */

        $holdiay=Conges::join('users','users.id','=','holidays.user_ID')
                          ->get(['holidays.*','users.name']);

        return view('admin.conges.index', compact('holdiay'));
    }

   public function changeAccepter(Request $request, $id)
   {
    $user = Conges::find($request->id);
    $user->status = 'Accepté';
    $user->update();
    return redirect('conges')->with('status','Status Changed Successfully');
   }

   public function changeRefuser(Request $request, $id)
   {
    $user = Conges::find($id);
    $user->status = 'Refusé';
    $user->update();
    return redirect('conges')->with('status','Status Changed Successfully');
   }

   public function download($id)
   {
      // $data =DB::table('holdiays')->where('id',$id)->value('certificate');
      // $myFile = public_path("assets/uploads/certificate/{$data}");
       return response()->download(file:'assets/uploads/certificate/'.$id);
   }

   public function downpdf()
   {
     
      $holdiay=Conges::join('users','users.id','=','holidays.user_ID')
               ->get(['holidays.*','users.name']);
               $pdf= PDF::loadView('admin.conges.report', compact('holdiay'));
               return $pdf->stream();
   }

    
}

