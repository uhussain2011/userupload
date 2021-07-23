<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;


use \App\Models\Photo; 
class UserController extends Controller
{
  


    public function uploadPhoto(Request $request){



        if($request->hasFile('image')){



                $fileNameWithExt = $request->file('image')->getClientOriginalName(); 
                $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

                // get the extension 
                $extension = $request->file('image')->getClientOriginalExtension();


            // filename to store 
                $fileNameToStore = $filename . '_'. time(). '.'.$extension;


                // upload the image 
                  $path = $request->file('image')->storeAs('public/images', $fileNameToStore); 

                  if($path){
                    $image = new Photo(); 
                    $image->user_id = auth()->user()->id; 
                    $image->photo_path = $fileNameToStore; 
                    $image->description = $request->description; 

                    $save = $image->save(); 

                if($save){
                    return redirect('home');

                  }else{
                    echo "AN error occured"; 
                  }

                }else{
                    echo "FIle npot stored";
                }


}


        }




























}
