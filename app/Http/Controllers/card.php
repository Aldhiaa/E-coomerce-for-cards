<?php

namespace App\Http\Controllers;

use App\Models\card as cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AddCardRequest;

use App\Enums\CategoryEnum;

class card extends Controller
{
    public function index()
    {
        $categories = CategoryEnum::items();
        $cards  = cards::paginate(2);
        $cards->when(request()->filled('category'), function($query){
            return $query->where('category', request()->category);
        });
    
       # $cards  = $cards->paginate(4);
 
        return view('index', compact('categories', 'cards'));
    }

    public function show($id){
        $card=cards::findOrFail($id);
         
        return view('details',compact('card'));
     }
    public function addcard(){
        if(auth()->user() && auth()->user()->type!='provider') 
        {
          return redirect()->route('index');
        }
        $categories = CategoryEnum::items();
        return view("addcard", compact('categories'));
    } 
    public function store(AddCardRequest $request){ 
        $data = $request->validated();
        if($request->hasfile('image'))
        {
            $image=$request->file("image");
            $imageName=$image->getClientOriginalName();             
            Storage::disk("card")->putFileAs("card",$image,$imageName);    
        }    
       
        $data['image']=$imageName;
        $data['provider_id']=auth()->user()->type=="provider"; 
        cards::create($data);                              
        return redirect()->route("index");
   
    }
    public function edit($id){
        $cards=cards::find($id);
        return view("updatecards",compact("cards"));
      }
    public function update(Request $request,$id){
        try{
            $name=$request->name;
            $price=$request->price;
            $category=$request->category;
            $description=$request->description;
            $cards=cards::find($request->id);
            if($request->hasFile("image")){
                unlink(public_path("cards/".$cards->getRawOriginal("image")));
                $image=$request->file("image");
                $imageName=time().rand(10000,99999).".".$image->getClientOriginalExtension();
                Storage::disk("cards")->putFileAs("cards",$image,$imageName);
                $cards->image=$imageName;
            }
            $cards->name=$name;
            $cards->price=$price;
            $cards->category=$category;
            $cards->description=$description;
            $cards->save();       
            return redirect()->route("index");
        }catch(\Exception $ex){
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }
    public function delete($id){
        try{
            $cards=cards::find($id);
            unlink(public_path("cards/".$cards->getRawOriginal("image")));
            $cards->delete();
            return redirect()->route("index");
        }catch(\Exception $ex){
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }
}
