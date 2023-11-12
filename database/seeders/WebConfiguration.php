<?php

namespace Database\Seeders;

use App\Models\WebConfiguration as ModelsWebConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebConfiguration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsWebConfiguration::create([
            'title' => 'InvFest',
            'heading' => 'InvFest',
            'description' => 'InvFest',
            'footer_description' => 'InvFest',
            'footer_copyrigth' => 'InvFest',
            'deadline' => '2021-10-10',
            'email' => 'invfest@gmail.com',
            'phone' => '081234567890',
            'primary_color' => '#000000',
            'primary_color_hover' => '#000000',
            'secondary_color' => '#000000',
            'secondary_color_hover' => '#000000',
            'twibbon_link' => 'https://invfest.my.id',
        ]);
    }
}
