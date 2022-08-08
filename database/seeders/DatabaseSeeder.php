<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::Create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel,javascript',
            'company' => 'Azaman',
            'location' => 'Boston',
            'email' => 'Azaman@gmail.com',
            'website' => 'http://www.azaman.com',
            'description' => 'Azaman is a company pyu all will like to be associated with, we are known for top notch services and the best quality and quantity come from us, in doubt try Azaman. Y ou wont regret it i promise you that and it means a lto to us when you buy and refer us to your loved ones',
            
        ]);

        Listing::Create([
            'title' => 'Junior Senior Developer',
            'tags' => 'vue,javascript',
            'company' => 'yzaman',
            'location' => 'Bolton',
            'email' => 'Azaman@gmail.com',
            'website' => 'http://www.azaman.com',
            'description' => 'Azaman is a company pyu all will like to be associated with, we are known for top notch services and the best quality and quantity come from us, in doubt try Azaman. Y ou wont regret it i promise you that and it means a lto to us when you buy and refer us to your loved ones',
            
        ]);
    }
}
