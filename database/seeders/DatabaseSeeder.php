<?php

namespace Database\Seeders;

use App\Models\User;
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

        $admin = User::firstOrCreate(
            ['email' => 'priya@gmail.com'],
            [
                'name' => 'Priya Kacha',
                'password' => bcrypt('password')
            ]
        );

        // Insert default listings (always tied to admin)
        $defaultListings = [
            [
                'title' => 'Laravel Developer',
                'tags' => 'laravel, vue, javascript',
                'company' => 'Wayne Enterprises',
                'location' => 'Gotham, NY',
                'email' => 'email3@email.com',
                'website' => 'https://www.brucewaynex.com',
                'description' => 'Installs, configures, and manages databases for organizations.
                                  Monitors performance, backups, and data recovery processes.
                                  Ensures data security, consistency, and availability.
                                  Works with SQL, Oracle, or MySQL to optimize systems.',
                'logo' => 'images/logos/wayne.png'
            ],
            [
                'title' => 'Full-Stack Engineer',
                'tags' => 'laravel, backend ,api',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@email.com',
                'website' => 'https://www.starkindustries.com',
                'description' => 'Develops and maintains software applications based on client or business needs.
                                  Writes clean, efficient code using languages like Java, Python, or C++.
                                  Collaborates with designers, testers, and other developers.
                                  Fixes bugs and improves system performance continuously.',
                'logo' => 'images/logos/stark.png'
            ],
            [
                'title' => 'Laravel Senior Developer',
                'tags' => 'laravel, javascript',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'description' => 'Builds and manages websites and web-based applications.
                                  Uses HTML, CSS, JavaScript, and frameworks for development.
                                  Ensures websites are responsive, fast, and user-friendly.
                                  Maintains website security and updates regularly.',
                'logo' => 'images/logos/acme.png'
            ],
            [
                'title' => 'Backend Developer',
                'tags' => 'laravel, php, api',
                'company' => 'Skynet Systems',
                'location' => 'Newark, NJ',
                'email' => 'email4@email.com',
                'website' => 'https://www.skynet.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                  Ipsam minima et illo reprehenderit quas possimus
                                  voluptas repudiandae cum expedita,
                                  eveniet aliquid, quam illum quaerat consequatur!
                                  Expedita ab consectetur tenetur delensiti?',
                'logo' => 'images/logos/skynet.png'
            ],
            [
                'title' => 'Junior Developer',
                'tags' => 'laravel, php, javascript',
                'company' => 'Wonka Industries',
                'location' => 'Boston, MA',
                'email' => 'email4@email.com',
                'website' => 'https://www.wonka.com',
                'description' => 'The Wonka Bar is originally a fictional chocolate bar, 
                                  introduced as a key story point in the 1964 novel Charlie and the Chocolate Factory by Roald Dahl.
                                  Wonka Bars appear in each film adaptation of the novel: 
                                  Willy Wonka & the Chocolate Factory (1971); 
                                  Charlie & the Chocolate Factory (2005), and Wonka (2023).
                                  The bar also appeared in the musical adaptation of the novel,
                                  Charlie and the Chocolate Factory (2013).',
                'logo' => 'images/logos/wonka.png'
            ]
        ];


        foreach ($defaultListings as $listing) {
            Listing::firstOrCreate(
                ['title' => $listing['title']], // avoid duplicates
                array_merge($listing, ['user_id' => $admin->id])
            );
        }
    }
}
