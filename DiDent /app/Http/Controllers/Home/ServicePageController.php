<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutClinic;
use App\Models\AboutExperience;
use App\Models\AboutRightImage;
use App\Models\AboutVideo;
use App\Models\CertifaicateAssociations;
use App\Models\Gallery;
use App\Models\HospitalInfo;
use App\Models\IFrame;
use App\Models\Logo;
use App\Models\OpeningTime;
use App\Models\RecentNews;
use App\Models\Service;
use App\Models\ServiceList;
use App\Models\ServiceOffer;
use App\Models\ServiceOfferList;
use App\Models\ServiceSpecialists;
use App\Models\SocialMedia;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index()
    {
        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at', 'desc')->first();
        $iframe = IFrame::orderBy('updated_at', 'desc')->first();
        $aboutRightImage = AboutRightImage::first();
        $clinic = AboutClinic::first();
        $aboutExperience = AboutExperience::orderBy('created_at', 'Asc')->get();
        $videoURL = AboutVideo::first();
        $ca = CertifaicateAssociations::orderBy('created_at', 'desc')->get();
        $recentNews = RecentNews::orderBy('created_at', 'desc')->take(3)->get();
        $rateings = Testimonials::orderBy('created_at', 'desc')->get();
        $service = Service::first();
        $serviceLists = ServiceList::orderBy('created_at', 'desc')->take(9)->get();
        $serviceOfferDescription = ServiceOffer::first();
        $specialist = ServiceSpecialists::first();
        $serviceOfferLists = ServiceOfferList::orderBy('created_at', 'desc')->get();


        return view('service', compact(
            'serviceOfferLists',
            'specialist',
            'serviceOfferDescription',
            'serviceLists',
            'service',
            'openTime',
            'hospitalInfo',
            'socialMedia',
            'logo',
            'videoURL',
            'ca',
            'recentNews',
            'iframe',
            'aboutRightImage',
            'clinic',
            'aboutExperience',
            'rateings'
        ));
    }

    public function showDetails($id)
    {

        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at', 'desc')->first();
        $iframe = IFrame::orderBy('updated_at', 'desc')->first();
        $aboutRightImage = AboutRightImage::first();
        $clinic = AboutClinic::first();
        $aboutExperience = AboutExperience::orderBy('created_at', 'Asc')->get();
        $videoURL = AboutVideo::first();
        $ca = CertifaicateAssociations::orderBy('created_at', 'desc')->get();
        $recentNews = RecentNews::orderBy('created_at', 'desc')->take(3)->get();
        $rateings = Testimonials::orderBy('created_at', 'desc')->get();
        $service = Service::first();
        $serviceLists = ServiceList::orderBy('created_at', 'desc')->take(9)->get();
        $serviceOfferDescription = ServiceOffer::first();
        $specialist = ServiceSpecialists::first();
        $serviceOfferLists = ServiceOfferList::orderBy('created_at', 'desc')->get();
        $serviceDetails = ServiceList::findOrFail($id);
        $gallery = Gallery::all();

        return view('serviceDetails', compact(
            'gallery',
            'serviceDetails',
            'serviceOfferLists',
            'specialist',
            'serviceOfferDescription',
            'serviceLists',
            'service',
            'openTime',
            'hospitalInfo',
            'socialMedia',
            'logo',
            'videoURL',
            'ca',
            'recentNews',
            'iframe',
            'aboutRightImage',
            'clinic',
            'aboutExperience',
            'rateings'
        ));
    }
}
