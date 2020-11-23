<?php

namespace App\Providers;

use App\Model\UserInfo;
use App\Model\WeeklyLecture;
use Illuminate\Support\ServiceProvider;
use App\Model\PrimaryInfo;
use App\Model\AboutCompany;
use App\Model\Menu;
use App\Model\MenuSetting;
use App\Model\ImportantLinks;
use App\Model\SocialIcon;
use App\Model\BgImage;
use View;
use DB;
use Auth;
class OrganaizitionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer( // primary info in home page
            [

                'home',
                'backend.app',
                'backend.index',
                'website.include.footer-top',
                'website.include.menu',
                'website.include.header',


            ],function ($view){

            $info = PrimaryInfo::first();
            $socialIcons=SocialIcon::orderBy('id','asc')->get();


            $view->with(['info'=>$info,'socialIcons'=>$socialIcons]);

        });

              View::composer( // about info in home page $ footer
            [

                'home',
            ],function ($view){

            $about = AboutCompany::first();
            $view->with('about',$about);

        });



        View::composer( // Main menu supply to menu bar
            [
                'backend._partials.sidebar',
                'backend.home.footerIconMenu',
            ],function ($view){
                $menus=Menu::with('subMenu')->orderBy('serial_num','asc')->where(['status'=>1,'type'=>1])->get();
                $view->with('menus',$menus);
        });
    }
}
