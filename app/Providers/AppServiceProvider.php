<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BlueFission\DevElation;
use App\Models\Customer;
use BlueFission\FileSystem\File;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Log when a customer is saved
        DevElation::listen('before.save.customer', function (Customer $customer) {
            $log = new File(storage_path('logs/customer.log'));
            $info = [
                'Name' => $customer->field('first_name')->value() . ' ' . $customer->field('last_name')->value(),
                'Email' => $customer->field('email')->value(),
                'Phone' => $customer->field('phone')->value(),
                'Sprinkler' => $customer->field('has_sprinkler_system')->value(),
                'Time' => now(),
            ];
            $log->write("Saving customer: $email\n");
        });
    }
}
