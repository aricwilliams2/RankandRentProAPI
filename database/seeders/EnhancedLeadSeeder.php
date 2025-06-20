<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lead;

class EnhancedLeadSeeder extends Seeder
{
    public function run(): void
    {
        $leads = [
            [
                'id' => '7693c2f4-365d-41f7-802d-015c3d9fcfc9',
                'name' => 'Sarah Miller',
                'email' => 'sarah@coastalbuilders.com',
                'phone' => '910-555-8234',
                'company' => 'Coastal Builders',
                'status' => 'New',
                'notes' => 'Interested in bulk order.',
                'reviews' => 1500,
                'website' => 'https://www.coastalbuilders.com/',
                'contacted' => false,
            ],
            [
                'id' => '91752628-98f7-4c2e-a5c2-d10c1b689752',
                'name' => 'Michael Johnson',
                'email' => 'mjohnson@citywaste.com',
                'phone' => '510-555-2376',
                'company' => 'City Waste Management',
                'status' => 'Contacted',
                'notes' => 'Followed up on June 10th, wants a proposal by end of month.',
                'reviews' => 1400,
                'website' => 'https://www.citywaste.com/',
                'contacted' => true,
            ],
            [
                'id' => '04775ef5-c302-4353-ad15-816ed9be8925',
                'name' => 'Jessica Wu',
                'email' => 'jwu@propertypros.net',
                'phone' => '415-555-9821',
                'company' => 'Property Pros',
                'status' => 'Qualified',
                'notes' => 'Needs service for 15 properties, budget approved.',
                'reviews' => 280,
                'website' => 'https://www.propertypros.net/',
                'contacted' => true,
            ],
            [
                'id' => '3e6f7fc5-a85a-4de6-b224-5e8075daf70f',
                'name' => 'Robert Chen',
                'email' => 'robert@chenenterprises.org',
                'phone' => '702-555-1122',
                'company' => 'Chen Enterprises',
                'status' => 'Converted',
                'notes' => 'Signed contract for $25k. Start date: July 15th.',
                'reviews' => 430,
                'website' => 'https://www.chenenterprises.org/',
                'contacted' => true,
            ],
            [
                'id' => 'a93479ce-b24d-4298-a303-17ac2f9f9042',
                'name' => 'Amanda Torres',
                'email' => 'amanda@greentree.co',
                'phone' => '305-555-6677',
                'company' => 'Green Tree Landscaping',
                'status' => 'New',
                'notes' => 'Found us through website contact form.',
                'reviews' => 110,
                'website' => 'https://www.greentree.co/',
                'contacted' => false,
            ],
            [
                'id' => '2b4c11f5-2bda-42d4-9485-05774e85bfa9',
                'name' => 'David Wilson',
                'email' => 'david@wilsonproperties.com',
                'phone' => '617-555-3344',
                'company' => 'Wilson Properties',
                'status' => 'Lost',
                'notes' => 'Went with competitor due to pricing.',
                'reviews' => 75,
                'website' => 'https://www.wilsonproperties.com/',
                'contacted' => true,
            ],
            [
                'id' => 'bc9d2acf-ff9b-4794-be0c-336cb828281e',
                'name' => 'James Thompson',
                'email' => 'jthompson@thompsoncontracting.biz',
                'phone' => '213-555-9900',
                'company' => 'Thompson Contracting',
                'status' => 'New',
                'notes' => 'Referred by Coastal Builders.',
                'reviews' => 45,
                'website' => 'https://www.thompsoncontracting.biz/',
                'contacted' => false,
            ],
            [
                'id' => '066f5214-5bb7-43d3-b514-274f3db522fd',
                'name' => 'Jennifer Lopez',
                'email' => 'jlopez@supercleaning.com',
                'phone' => '404-555-8877',
                'company' => 'Super Cleaning Services',
                'status' => 'Qualified',
                'notes' => 'Needs services for 3 commercial properties.',
                'reviews' => 210,
                'website' => 'https://www.supercleaning.com/',
                'contacted' => true,
            ],
            [
                'id' => '2d7b7418-38a4-4615-b9d0-439cca5fb8d2',
                'name' => 'William Garcia',
                'email' => 'wgarcia@garciahomes.net',
                'phone' => '714-555-2233',
                'company' => 'Garcia Homes',
                'status' => 'Contacted',
                'notes' => 'Initial call made, follow up next week.',
                'reviews' => 155,
                'website' => 'https://www.garciahomes.net/',
                'contacted' => true,
            ],
            [
                'id' => '1c1e6258-5ad8-43f7-82c9-a7a4cb713d50',
                'name' => 'Emily Patel',
                'email' => 'emily@patelandsons.com',
                'phone' => '312-555-6789',
                'company' => 'Patel & Sons Construction',
                'status' => 'New',
                'notes' => 'Needs quote for upcoming project.',
                'reviews' => 78,
                'website' => 'https://www.patelandsons.com/',
                'contacted' => false,
            ],
        ];

        foreach ($leads as $lead) {
            Lead::create($lead);
        }
    }
}