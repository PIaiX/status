<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contact = Contact::all();
        $services = Service::all();
        view()->share('phone_number', $contact[0]->phone);
        view()->share('address', $contact[0]->address);
        view()->share('services', $services);
    }
}
