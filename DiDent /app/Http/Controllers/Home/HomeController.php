<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutClinic;
use App\Models\AboutExperience;
use App\Models\AboutRightImage;
use App\Models\AboutVideo;
use App\Models\CertifaicateAssociations;
use App\Models\HospitalInfo;
use App\Models\IFrame;
use App\Models\Logo;
use App\Models\OpeningTime;
use App\Models\RecentNews;
use App\Models\ServiceList;
use App\Models\SocialMedia;
use App\Models\Testimonials;

class HomeController extends Controller
{
    public function index(){

        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at','desc')->first();
        $iframe = IFrame::orderBy('updated_at','desc')->first();
        $aboutRightImage = AboutRightImage::first();
        $clinic = AboutClinic::first();
        $aboutExperience = AboutExperience::orderBy('created_at','Asc')->get();
        $videoURL = AboutVideo::first();
        $ca = CertifaicateAssociations::orderBy('created_at', 'desc')->get();
        $recentNews = RecentNews::orderBy('created_at', 'desc')->take(3)->get();
        $rateings = Testimonials::orderBy('created_at', 'desc')->get();
        $serviceLists = ServiceList::orderBy('created_at', 'desc')->take(6)->get();

        return view('welcome', compact('openTime','hospitalInfo','socialMedia','logo','videoURL','ca','recentNews',
        'iframe','aboutRightImage','clinic','aboutExperience','rateings','serviceLists'));
        
    }
}
