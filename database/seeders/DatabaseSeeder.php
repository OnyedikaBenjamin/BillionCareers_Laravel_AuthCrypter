<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $user=User::factory()->create();


         Listing::factory(10)->create([
            'user_id' => $user->id,
         ]);




        // 'role' => 'required',
        // 'location' => 'required',
        // 'job_type' => 'required',
        // 'description' => 'required',
        // 'salary_range' => 'required',
        // 'yearly_salary' => 'required',
        // 'no_vacancy' => 'required',
        // 'company' => 'required',
        // 'email' => ['required', 'email'],
        // 'company_description',
        // 'website'

        // $table->string('role');
        //     $table->string('location');
        //     $table->string('job_type');
        //     $table->longText('description');
        //     $table->string('salary_range');
        //     $table->string('yearly_salary');
        //     $table->string('no_vacancy');
        //     $table->string('company');
        //     $table->string('email');
        //     $table->longText('company_description');
        //     $table->string('website');

    //     Listing::create( [
    //         'title' => 'Laravel Senior Developer', 
    //         'tags' => 'laravel, javascript',
    //         'company' => 'Acme Corp',
    //         'location' => 'Boston, MA',
    //         'email' => 'email1@email.com',
    //         'website' => 'https://www.acme.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);

    //     Listing::create( [
    //         'title' => 'Laravel Senior Developer', 
    //         'tags' => 'laravel, javascript',
    //         'company' => 'Acme Corp',
    //         'location' => 'Boston, MA',
    //         'email' => 'email1@email.com',
    //         'website' => 'https://www.acme.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);
}
}
