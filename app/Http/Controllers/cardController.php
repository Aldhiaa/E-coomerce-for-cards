<?php

namespace App\Http\Controllers;

use App\Enums\CategoryEnum;
use App\Models\card;
use Illuminate\Http\Request;

class cardController extends Controller
{
    public function index(){
        $categories = CategoryEnum::items();
        $cards  = card::query();
        // By category
        $cards->when(request()->filled('category'), function($query){
            return $query->where('category', request()->category);
        });
        
        $cards  = $cards->paginate(10);
        
        return view('shop', compact('categories', 'cards'));
    }
}
