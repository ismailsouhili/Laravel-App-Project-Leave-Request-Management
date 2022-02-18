<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Pdf extends Controller
{
  

   /* public function download()
    {       
        //1643720265.pdf
        $filePath = public_path("assets/uploads/certificate/");
    	$headers = ['Content-Type: application/pdf'];
    	$fileName = time().'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }  */

    public function download($id)
    {
        $data =DB::table('holdiays')->where('id',$id)->first();
    	$myFile = public_path("assets/uploads/certificate/{$data->path}");
    	return response()->download($myFile);
    }
    
}
