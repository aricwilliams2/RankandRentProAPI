<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    public function run(): void
    {
        $leads = [
            [
                'id' => '7693c2f4-365d-41f7-802d-015c3d9fcfc9',
                'name' => 'Junk Bee Gone LLC',
                'reviews' => 1500,
                'phone' => 'tel:+12145',
                'website' => 'https://www.junkbeegone.biz/',
                'contacted' => false,
            ],
            [
                'id' => '91752628-98f7-4c2e-a5c2-d10c1b689752',
                'name' => 'College Hunks Hauling Junk and Moving Knoxville',
                'reviews' => 1400,
                'phone' => 'tel:+16219',
                'website' => 'https://www.collegehunkshaulingjunk.com/knoxville',
                'contacted' => false,
            ],
            [
                'id' => '04775ef5-c302-4353-ad15-816ed9be8925',
                'name' => 'Junk Galaxy',
                'reviews' => -1,
                'phone' => 'tel:+13508',
                'website' => 'https://junkgalaxy.com/contact/',
                'contacted' => false,
            ],
            [
                'id' => '3e6f7fc5-a85a-4de6-b224-5e8075daf70f',
                'name' => 'Brothers Junk Removal and Hauling',
                'reviews' => -1,
                'phone' => 'tel:+18209',
                'website' => 'https://brotherslocalhauling.com/',
                'contacted' => false,
            ],
            [
                'id' => 'a93479ce-b24d-4298-a303-17ac2f9f9042',
                'name' => 'Hiatt\'s Hauling',
                'reviews' => -1,
                'phone' => 'tel:+18654543310',
                'website' => 'nan',
                'contacted' => false,
            ],
            [
                'id' => '2b4c11f5-2bda-42d4-9485-05774e85bfa9',
                'name' => 'Knox Junk Solutions, LLC',
                'reviews' => -2,
                'phone' => 'tel:+18883252011',
                'website' => 'nan',
                'contacted' => false,
            ],
            [
                'id' => 'bc9d2acf-ff9b-4794-be0c-336cb828281e',
                'name' => 'Heeve Ho Junk Removal',
                'reviews' => -6,
                'phone' => 'tel:+18654555830',
                'website' => 'https://heeve-ho-junk-removal.ueniweb.com/',
                'contacted' => false,
            ],
            [
                'id' => '066f5214-5bb7-43d3-b514-274f3db522fd',
                'name' => 'Junk Fam - Junk Removal Knoxville',
                'reviews' => -8,
                'phone' => 'tel:+18652299493',
                'website' => 'nan',
                'contacted' => false,
            ],
            [
                'id' => '2d7b7418-38a4-4615-b9d0-439cca5fb8d2',
                'name' => 'Hometown Junk Removal',
                'reviews' => -9,
                'phone' => '',
                'website' => 'https://knoxvillejunkpickup.com/',
                'contacted' => false,
            ],
            [
                'id' => '1c1e6258-5ad8-43f7-82c9-a7a4cb713d50',
                'name' => 'Meerkat Junk Removal',
                'reviews' => -12,
                'phone' => 'tel:+18209',
                'website' => 'https://www.meerkatjunkremoval.com/',
                'contacted' => false,
            ],
            [
                'id' => 'd1550747-7091-4e12-be23-dc2719df9fc8',
                'name' => 'Knox De-Clutter Kings',
                'reviews' => -14,
                'phone' => 'tel:+13919',
                'website' => 'https://knoxdeclutterkingsjunkremoval.com/',
                'contacted' => false,
            ],
            [
                'id' => '83533838-e41c-48eb-9ae8-94298c3f99f8',
                'name' => 'Junk Removal Heroes',
                'reviews' => -16,
                'phone' => 'tel:+18658889222',
                'website' => 'http://www.junkremovalheroes.com/locations/knoxville/',
                'contacted' => false,
            ],
            [
                'id' => '22b57fdc-48dd-4337-aa59-4d971d52d3c2',
                'name' => 'King Floyd Junk Removal, LLC',
                'reviews' => -18,
                'phone' => 'tel:+18653210228',
                'website' => 'http://www.kingfloydjunkremoval.com/',
                'contacted' => false,
            ],
        ];

        foreach ($leads as $lead) {
            Lead::create($lead);
        }
    }
}