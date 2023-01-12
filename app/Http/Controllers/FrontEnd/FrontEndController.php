<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\BackEnd\SectionDivider\ContactUs\HeadingContactController;
use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutUs\AboutUs;
use App\Models\BackEnd\AboutUs\AboutUsTeam;
use App\Models\BackEnd\Client;
use App\Models\BackEnd\Company\AddCompany;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureAbout;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureTeam;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\Service\ArtVentureCategory;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\Service\ArtVentureItem;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\BdDigitalAbout;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\BdDigitalTeam;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceItem;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyAbout;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyTeam;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceItem;
use App\Models\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceItem;
use App\Models\BackEnd\Company\SingleCompany\Tns\TnsAbout;
use App\Models\BackEnd\Company\SingleCompany\Tns\TnsTeam;
use App\Models\BackEnd\Contact\Address;
use App\Models\BackEnd\Contact\Map;
use App\Models\BackEnd\Gallery\GalleryCategory;
use App\Models\BackEnd\Gallery\GalleryItem;
use App\Models\BackEnd\Home\FooterSocialLink;
use App\Models\BackEnd\Home\FooterTag;
use App\Models\BackEnd\Home\PartialHeader;
use App\Models\BackEnd\Home\QuickLink;
use App\Models\BackEnd\Home\Slider;
use App\Models\BackEnd\SectionDivider\Company\Company;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\ArtVentureCompany;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\BdDigitalCompany;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\ConnectToFlyCompany;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\TnsCompany;
use App\Models\BackEnd\SectionDivider\ContactUs\Contact;
use App\Models\BackEnd\SectionDivider\Gallery\Gallery;
use App\Models\BackEnd\SectionDivider\Service\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    //Home Start
    public function index(){
        $partial_header = PartialHeader::first();
        $sliders = Slider::all();
        $clients = Client::all();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $aboutUs = AboutUs::first();
        $companies = AddCompany::all();
        $companyHeadingAndSubText = Company::first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        return view('frontEnd.home', compact('clients', 'partial_header', 'aboutUs', 'footerQuickLinks', 'footerTags', 'sliders', 'footerSocialLinks', 'companies', 'companyHeadingAndSubText', 'aboutUsHeadingAndSubText'));
    }
    //Home End

    //About Us Start
    public function aboutUs(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $aboutUs = AboutUs::first();
        $aboutUsTeam = AboutUsTeam::first();
        $clients = Client::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        return view('frontEnd.about-us', compact('clients', 'partial_header', 'aboutUs', 'aboutUsTeam', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'aboutUsHeadingAndSubText'));
    }
    //About Us End

    //Company Start
    public function company(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $addCompanies = AddCompany::all();
        $companyArtVentureTeams = ArtVentureTeam::all();
        $companyTnsTeams = TnsTeam::all();
        $companyBdDigitalTeams = BdDigitalTeam::all();
        $companyConnectToFlyTeams = ConnectToFlyTeam::all();
        $companyHeadingAndSubText = Company::first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        return view('frontEnd.company.company', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'addCompanies', 'companyArtVentureTeams', 'companyTnsTeams', 'companyTnsTeams', 'companyBdDigitalTeams', 'companyConnectToFlyTeams', 'companyHeadingAndSubText', 'aboutUsHeadingAndSubText'));
    }
    //Art Venture - Company
    public function companyArtVenture(){
        $partial_header = PartialHeader::first();
        $companyArtVentureAbout = ArtVentureAbout::first();
        $companyArtVentureTeams = ArtVentureTeam::all();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $cavsc = ArtVentureCategory::first();
        $companyArtVentureServiceCategories = ArtVentureCategory::all();
        $companyArtVentureServiceItems = ArtVentureItem::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $artVentureHeadingAndSubText = ArtVentureCompany::first();
        return view('frontEnd.company.single-company.art-venture.dashboard', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'companyArtVentureAbout', 'companyArtVentureTeams', 'companyArtVentureServiceCategories', 'companyArtVentureServiceItems', 'cavsc', 'aboutUsHeadingAndSubText', 'artVentureHeadingAndSubText'));
    }
    public function companyArtVentureServiceDetails($slug){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $singleCompanyArtVentureServiceItem = ArtVentureItem::where('slug',$slug)->first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $artVentureHeadingAndSubText = ArtVentureCompany::first();
        return view('frontEnd.company.single-company.art-venture.service-details', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'singleCompanyArtVentureServiceItem', 'aboutUsHeadingAndSubText', 'artVentureHeadingAndSubText'));
    }
    //Tns - Company
    public function companyTns(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $companyTnsAbout = TnsAbout::first();
        $companyTnsTeams = TnsTeam::all();
        $cctsc = TnsServiceCategory::first();
        $companyTnsServiceCategories = TnsServiceCategory::all();
        $companyTnsServiceItems = TnsServiceItem::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $tnsHeadingAndSubText = TnsCompany::first();
        return view('frontEnd.company.single-company.tns.dashboard', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'companyTnsAbout', 'companyTnsTeams', 'companyTnsServiceCategories', 'companyTnsServiceItems', 'cctsc', 'aboutUsHeadingAndSubText', 'tnsHeadingAndSubText'));
    }
    public function companyTnsServiceDetails($slug){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $singleCompanyTnsServiceItem = TnsServiceItem::where('slug',$slug)->first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $tnsHeadingAndSubText = TnsCompany::first();
        return view('frontEnd.company.single-company.tns.service-details', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'singleCompanyTnsServiceItem', 'aboutUsHeadingAndSubText', 'tnsHeadingAndSubText'));
    }
    //BD Digital - Company
    public function companyBdDigital(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $companyBdDigitalAbout = BdDigitalAbout::first();
        $companyBdDigitalTeams = BdDigitalTeam::all();
        $cbdsc = BdDigitalServiceCategory::first();
        $companyBdDigitalServiceCategories = BdDigitalServiceCategory::all();
        $companyBdDigitalServiceItems = BdDigitalServiceItem::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $bdDigitalHeadingAndSubText = BdDigitalCompany::first();
        return view('frontEnd.company.single-company.bd-digital.dashboard', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'companyBdDigitalAbout', 'companyBdDigitalTeams', 'companyBdDigitalServiceCategories', 'companyBdDigitalServiceItems', 'cbdsc', 'aboutUsHeadingAndSubText', 'bdDigitalHeadingAndSubText'));
    }
    public function companyBdDigitalServiceDetails($slug){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $singleCompanyBdDigitalServiceItem = BdDigitalServiceItem::where('slug',$slug)->first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $bdDigitalHeadingAndSubText = BdDigitalCompany::first();
        return view('frontEnd.company.single-company.bd-digital.service-details', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'singleCompanyBdDigitalServiceItem', 'aboutUsHeadingAndSubText', 'bdDigitalHeadingAndSubText'));
    }
    //Connect To Fly - Company
    public function companyConnectToFly(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $companyConnectToFlyAbout = ConnectToFlyAbout::first();
        $companyConnectToFlyTeams = ConnectToFlyTeam::all();
        $cctfsc = ConnectToFlyServiceCategory::first();
        $companyConnectToFlyServiceCategories = ConnectToFlyServiceCategory::all();
        $companyConnectToFlyServiceItems = ConnectToFlyServiceItem::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $connectToFlyHeadingAndSubText = ConnectToFlyCompany::first();
        return view('frontEnd.company.single-company.connect-to-fly.dashboard', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'companyConnectToFlyAbout', 'companyConnectToFlyTeams', 'companyConnectToFlyServiceCategories', 'companyConnectToFlyServiceItems', 'cctfsc', 'aboutUsHeadingAndSubText', 'connectToFlyHeadingAndSubText'));
    }
    public function companyConnectToFlyServiceDetails($slug){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $singleCompanyConnectToFlyServiceItem = ConnectToFlyServiceItem::where('slug',$slug)->first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $connectToFlyHeadingAndSubText = ConnectToFlyCompany::first();
        return view('frontEnd.company.single-company.connect-to-fly.service-details', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'singleCompanyConnectToFlyServiceItem', 'aboutUsHeadingAndSubText', 'connectToFlyHeadingAndSubText'));
    }
    //Company End

    //Service Start
    public function service(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $clients = Client::all();
        $companyArtVentureServiceItems = ArtVentureItem::all();
        $companyTnsServiceItems = TnsServiceItem::all();
        $companyBdDigitalServiceItems = BdDigitalServiceItem::all();
        $companyConnectToFlyServiceItems = ConnectToFlyServiceItem::all();
        $serviceHeadingAndSubText = Service::first();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        return view('frontEnd.service', compact('partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'companyArtVentureServiceItems', 'companyTnsServiceItems', 'companyBdDigitalServiceItems', 'companyConnectToFlyServiceItems', 'serviceHeadingAndSubText', 'aboutUsHeadingAndSubText'));
    }
    //Service End

    //Gallery
    public function gallery(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $galleryCategories = GalleryCategory::all();
        $galleryItemsFirst = GalleryItem::first();
        $galleryItems = GalleryItem::all();
        $clients = Client::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $galleryHeadingAndSubText = Gallery::first();
        return view('frontEnd.gallery', compact('galleryCategories', 'galleryItems', 'partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'clients', 'galleryItemsFirst', 'aboutUsHeadingAndSubText', 'galleryHeadingAndSubText'));
    }

    //Contact
    public function contact(){
        $partial_header = PartialHeader::first();
        $footerQuickLinks = QuickLink::all();
        $footerTags = FooterTag::all();
        $footerSocialLinks = FooterSocialLink::all();
        $addresses = Address::all();
        $maps = Map::all();
        $clients = Client::all();
        $aboutUsHeadingAndSubText = \App\Models\BackEnd\SectionDivider\AboutUs\AboutUs::first();
        $contactUsHeadingAndSubText = Contact::first();
        return view('frontEnd.contact', compact('addresses', 'maps', 'clients', 'partial_header', 'footerQuickLinks', 'footerTags', 'footerSocialLinks', 'aboutUsHeadingAndSubText', 'contactUsHeadingAndSubText'));
    }
}
