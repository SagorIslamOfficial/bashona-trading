<?php

//Import Controllers
use App\Http\Controllers\BackEnd\AboutUs\AboutUsController;
use App\Http\Controllers\BackEnd\AboutUs\AboutUsMessageController;
use App\Http\Controllers\BackEnd\AboutUs\AboutUsTeamController;
use App\Http\Controllers\BackEnd\BackendController;
use App\Http\Controllers\BackEnd\ClientController;
use App\Http\Controllers\BackEnd\Company\AddCompanyController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureAboutController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureTeamController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture\Service\ArtVentureCategoryController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture\Service\ArtVentureItemController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\BdDigitalAboutController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\BdDigitalTeamController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceCategoryController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceItemController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyAboutController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyTeamController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceCategoryController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceItemController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceCategoryController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceItemController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\TnsAboutController;
use App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\TnsTeamController;
use App\Http\Controllers\BackEnd\Contact\AddressController;
use App\Http\Controllers\BackEnd\Contact\MapController;
use App\Http\Controllers\BackEnd\Contact\WhatsAppController;
use App\Http\Controllers\BackEnd\Gallery\GalleryCategoryController;
use App\Http\Controllers\BackEnd\Gallery\GalleryItemController;
use App\Http\Controllers\BackEnd\Home\FooterSocialLinkController;
use App\Http\Controllers\BackEnd\Home\PartialHeaderController;
use App\Http\Controllers\BackEnd\Home\QuickLinkController;
use App\Http\Controllers\BackEnd\Home\SliderController;
use App\Http\Controllers\BackEnd\Home\SocialPageIntegrationController;
use App\Http\Controllers\BackEnd\SectionDivider\AboutUs\HeadingAboutUsController;
use App\Http\Controllers\BackEnd\SectionDivider\Company\HeadingCompanyController;
use App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany\HeadingArtVentureCompanyController;
use App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany\HeadingBdDigitalCompanyController;
use App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany\HeadingConnectToFlyCompanyController;
use App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany\HeadingTnsCompanyController;
use App\Http\Controllers\BackEnd\SectionDivider\ContactUs\HeadingContactController;
use App\Http\Controllers\BackEnd\SectionDivider\Gallery\HeadingGalleryController;
use App\Http\Controllers\BackEnd\SectionDivider\Service\HeadingServiceController;
use App\Http\Controllers\FrontEnd\EmailContactController;
use App\Http\Controllers\FrontEnd\FrontEndController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

//FrontEnd Controllers
Route::get('/', [FrontEndController::class, 'index'])->name('front-end-home');
Route::get('/about-us', [FrontEndController::class, 'aboutUs'])->name('front-end-about-us');
//Company
Route::group(['prefix' => 'company'], function (){
//    Route::get('/', [FrontEndController::class, 'company'])->name('front-end-company');
    //Art Venture Single Company
    Route::group(['prefix' => 'art-venture'], function (){
        Route::get('/', [FrontEndController::class, 'companyArtVenture'])->name('front-end-company-art-venture');
        Route::get('/service/details/{slug}', [FrontEndController::class, 'companyArtVentureServiceDetails'])->name('front-end-company-art-venture-service-details');
    });
    //Tns Single Company
    Route::group(['prefix' => 'tns'], function (){
        Route::get('/', [FrontEndController::class, 'companyTns'])->name('front-end-company-tns');
        Route::get('/service/details/{slug}', [FrontEndController::class, 'companyTnsServiceDetails'])->name('front-end-company-tns-service-details');
    });
    //BD Digital Single Company
    Route::group(['prefix' => 'bd-digital'], function (){
        Route::get('/', [FrontEndController::class, 'companyBdDigital'])->name('front-end-company-bd-digital');
        Route::get('/service/details/{slug}', [FrontEndController::class, 'companyBdDigitalServiceDetails'])->name('front-end-company-bd-digital-service-details');
    });
    //Connect To Fly Single Company
    Route::group(['prefix' => 'connect-to-fly'], function (){
        Route::get('/', [FrontEndController::class, 'companyConnectToFly'])->name('front-end-company-ctf');
        Route::get('/service/details/{slug}', [FrontEndController::class, 'companyConnectToFlyServiceDetails'])->name('front-end-company-ctf-service-details');
    });
});
//Service
Route::group(['prefix' => 'service'], function (){
    Route::get('/', [FrontEndController::class, 'service'])->name('front-end-service');
    Route::get('/details/{slug}', [FrontEndController::class, 'serviceDetails'])->name('front-end-service-details');
});
//Gallery
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('front-end-gallery');
//Contact
Route::get('/contact', [FrontEndController::class, 'contact'])->name('front-end-contact');
Route::post('/contact', [EmailContactController::class, 'store'])->name('front-end-contact-email');




//BackEnd Controllers
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [BackendController::class, 'dashboard'])->name('admin');

    //About Us
    Route::group(['prefix' => 'about-us'], function (){
        Route::resource('about-us', AboutUsController::class);
        Route::resource('about-message', AboutUsMessageController::class);
        Route::resource('about-team', AboutUsTeamController::class);
    });

    //Company
    Route::group(['prefix' => 'company'], function (){
        Route::resource('add-company', AddCompanyController::class);

        Route::group(['prefix' => 'art-venture'], function (){
            Route::resource('art-venture-about', ArtVentureAboutController::class);
            Route::resource('service/art-venture-category', ArtVentureCategoryController::class);

            Route::delete('service/art-venture-item-images/{id}', [ArtVentureItemController::class, 'deleteImages'])->name('art-venture-item-images.destroy');
            Route::delete('service/art-venture-item-portfolio/{id}', [ArtVentureItemController::class, 'deletePortfolioImage'])->name('art-venture-item-portfolio');

            Route::resource('service/art-venture-item', ArtVentureItemController::class);
            Route::resource('art-venture-team', ArtVentureTeamController::class);
        });
        Route::group(['prefix' => 'tns'], function (){
            Route::resource('tns-about', TnsAboutController::class);
            Route::resource('service/tns-category', TnsServiceCategoryController::class);

            Route::delete('service/tns-item-images/{id}', [TnsServiceItemController::class, 'deleteTnsImages'])->name('tns-item-images.destroy');
            Route::delete('service/tns-item-portfolio/{id}', [TnsServiceItemController::class, 'deleteTnsPortfolioImage'])->name('tns-item-portfolio.destroy');

            Route::resource('service/tns-item', TnsServiceItemController::class);
            Route::resource('tns-team', TnsTeamController::class);
        });
        Route::group(['prefix' => 'bd-digital'], function (){
            Route::resource('bd-digital-about', BdDigitalAboutController::class);
            Route::resource('service/bd-digital-service-category', BdDigitalServiceCategoryController::class);

            Route::delete('service/bd-digital-item-images/{id}', [BdDigitalServiceItemController::class, 'deleteBdDigitalImages'])->name('bd-digital-item-images.destroy');
            Route::delete('service/bd-digital-item-portfolio/{id}', [BdDigitalServiceItemController::class, 'deleteBdDigitalPortfolioImage'])->name('bd-digital-item-portfolio.destroy');

            Route::resource('service/bd-digital-service-item', BdDigitalServiceItemController::class);
            Route::resource('bd-digital-team', BdDigitalTeamController::class);
        });
        Route::group(['prefix' => 'connect-to-fly'], function (){
            Route::resource('ctf-about', ConnectToFlyAboutController::class);
            Route::resource('service/ctf-service-category', ConnectToFlyServiceCategoryController::class);

            Route::delete('service/ctf-item-images/{id}', [ConnectToFlyServiceItemController::class, 'deleteConnectToFlyImages'])->name('ctf-item-images.destroy');
            Route::delete('service/ctf-item-portfolio/{id}', [ConnectToFlyServiceItemController::class, 'deleteConnectToFlyPortfolioImage'])->name('ctf-item-portfolio.destroy');

            Route::resource('service/ctf-service-item', ConnectToFlyServiceItemController::class);
            Route::resource('ctf-team', ConnectToFlyTeamController::class);
        });
    });

    //Gallery
    Route::group(['prefix' => 'gallery'], function (){
        Route::resource('gallery-category', GalleryCategoryController::class);
        Route::resource('gallery-item', GalleryItemController::class);
    });

    //Contact
    Route::group(['prefix' => 'contact'], function (){
        Route::resource('address', AddressController::class);
        Route::resource('map', MapController::class);
        Route::resource('whatsapp', WhatsAppController::class);
    });

    //Mixed
    Route::group([], function (){
        Route::resource('client', ClientController::class);
        Route::resource('partial-header', PartialHeaderController::class);
        Route::resource('quick-link', QuickLinkController::class);
        Route::resource('footer-page-integration', SocialPageIntegrationController::class);
        Route::resource('footer-social', FooterSocialLinkController::class);
        Route::resource('slider', SliderController::class);
    });

    //Heading & Sub Text
    Route::group(['prefix' => 'heading-and-sub-text'], function (){
        Route::resource('hst-about-us', HeadingAboutUsController::class);

        Route::group(['prefix' => 'companies'], function (){
            Route::resource('hst-companies', HeadingCompanyController::class);
            Route::resource('hst-art-venture', HeadingArtVentureCompanyController::class);
            Route::resource('hst-bd-digital', HeadingBdDigitalCompanyController::class);
            Route::resource('hst-tns', HeadingTnsCompanyController::class);
            Route::resource('hst-connect-to-fly', HeadingConnectToFlyCompanyController::class);
        });

        Route::resource('hst-service', HeadingServiceController::class);
        Route::resource('hst-gallery', HeadingGalleryController::class);
        Route::resource('hst-contact-us', HeadingContactController::class);
    });
});
