<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\HospitalInfo;
use App\Models\IFrame;
use App\Models\Logo;
use App\Models\OpeningTime;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index(){
        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at','desc')->first();
        $iframe = IFrame::orderBy('updated_at','desc')->first();
        $gallery = Gallery::orderBy('updated_at','desc')->get();
        return view('gallery', compact('openTime','hospitalInfo','socialMedia','logo','iframe','gallery'));

    }
}
