<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    
    public function homeSlider(){
        
        $homeSlide = HomeSlide::find(2);
        return view('admin.home_slide.home_slide_all', compact('homeSlide'));

        // $homeslide = HomeSlide::find(1);
        // return view('admin.home_slide.home_slide_all',compact('homeslide'));

    }

}
