<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\JoinProviderRequest;
use App\Models\Provider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    public function joinprovider(){

        return view('joinprovider');
    }

    public function submitjoinprovide(JoinProviderRequest $request){
    
        $data = $request->validated();
        $data_for_user['name']=$data['name'];
        $data_for_user['email']=$data['email'];              
        $data_for_user['phone_number']=$data['phone_number'];
        $data_for_user['city']=$data['city']; 
        $data_for_user['type']="2";
        $data_for_user['password'] = Hash::make($request->password);
   
        $user=User::create($data_for_user);
        event(new Registered($user)); 
        auth()->login($user);
      
        if($request->hasfile('commercial_reggister'))
        {
            $file=$request->file("commercial_reggister");
            $fileName=$file->getClientOriginalName().".".$file->getClientOriginalExtension();
            Storage::disk("privider")->putFileAs("privider",$file,$fileName);    
            $data_for_provider['commercial_reggister']=$fileName;    
        }
        $data_for_provider['company_name']=$request->company_name;
        $data_for_provider['company_url']=$request->company_url;
        $data_for_provider['user_id']=$user->id;
        Provider::create($data_for_provider);
        return redirect()->route('index')->withSuccess('تم انظمامك الى مزودونا بنجاح');
    }


}
