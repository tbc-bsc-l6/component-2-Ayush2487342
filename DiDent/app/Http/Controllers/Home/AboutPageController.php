<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutBest;
use App\Models\AboutBestCard;
use App\Models\AboutClinic;
use App\Models\AboutExperience;
use App\Models\AboutGalleryDescription;
use App\Models\AboutProblem;
use App\Models\AboutRightImage;
use App\Models\AboutVideo;
use App\Models\CertifaicateAssociations;
use App\Models\Gallery;
use App\Models\HospitalInfo;
use App\Models\IFrame;
use App\Models\Logo;
use App\Models\OpeningTime;
use App\Models\RecentNews;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {

        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at', 'desc')->first();
        $iframe = IFrame::orderBy('updated_at', 'desc')->first();
        $gallery = Gallery::orderBy('updated_at', 'desc')->get();
        $clinic = AboutClinic::first();
        $aboutRightImage = AboutRightImage::first();
        $aboutExperience = AboutExperience::orderBy('created_at', 'Asc')->get();
        $aboutExperience1 = AboutExperience::orderBy('created_at', 'desc')->take(2)->get();
        $videoURL = AboutVideo::first();
        $aboutBest = AboutBest::first();
        $aboutBestCard = AboutBestCard::all();
        $aboutGalleryDescription = AboutGalleryDescription::first();
        $ca = CertifaicateAssociations::orderBy('created_at', 'desc')->get();
        $aboutProblem = AboutProblem::first();
        $recentNews = RecentNews::orderBy('created_at', 'desc')->take(6)->get();


        return view('about', compact(
            'openTime',
            'recentNews',
            'hospitalInfo',
            'socialMedia',
            'logo',
            'iframe',
            'aboutGalleryDescription',
            'ca',
            'gallery',
            'clinic',
            'aboutRightImage',
            'aboutExperience',
            'videoURL',
            'aboutBest',
            'aboutBestCard',
            'aboutProblem',
            'aboutExperience1'
        ));
    }
}
