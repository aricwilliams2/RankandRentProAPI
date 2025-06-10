<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    public function run(): void
    {
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'LoadUp Junk Removal',
            'reviews' => 287,
            'phone' => 'tel:+18442397711',
            'website' => 'https://goloadup.com/greensboro/',
            'contacted' => false,
        ]);

        // Add more seed entries if needed...
    }
}
