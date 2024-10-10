<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $web_name='JAISWAL TRAVELS';
        $web_address='NEAR MANAS HOTEL, RAILWAY STATION ROAD GORAKHPUR (U.P.)';
        $web_email='Jaiswaltravelsgorakhpur9@gmail.com';
        $phone1='+91 9695127906';
        $phone2='+91 9889062777';
        $whats_no='+91 9889062777';
        $web_logo='image/logo.png';
        view()->share([
            'web_name'=>$web_name,
            'web_address'=>$web_address,
            'web_email'=>$web_email,
            'phone1'=>$phone1,
           'phone2'=>$phone2,
            'whats_no'=>$whats_no,
            'web_logo'=>$web_logo
        ]);
    }
}
