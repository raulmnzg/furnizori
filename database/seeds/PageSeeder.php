<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'Protecția datelor cu caracter personal',
            'slug' => 'protectia-datelor-cu-caracter-personal',
            'content' => 'Pagină în construcții'
        ]);

        Page::create([
            'name' => 'Termeni și condiții',
            'slug' => 'termeni-si-conditii',
            'content' => 'Pagină în construcții'
        ]);

        Page::create([
            'name' => 'Cookies',
            'slug' => 'cookies',
            'content' => 'Pagină în construcții'
        ]);
    }
}
