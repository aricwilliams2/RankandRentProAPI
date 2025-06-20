<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lead;

class KnoxvilleLeadsSeeder extends Seeder
{
    public function run()
    {
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Bee Gone LLC',
            'reviews' => 1500,
            'address' => '2145 Wilson Rd',
            'website' => 'https://www.junkbeegone.biz/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'College Hunks Hauling Junk and Moving Knoxville',
            'reviews' => 1400,
            'address' => '6219 Riverview Crossing Dr',
            'website' => 'https://www.collegehunkshaulingjunk.com/knoxville',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Galaxy',
            'reviews' => -1,
            'address' => '3508 Overlook Cir',
            'website' => 'https://junkgalaxy.com/contact/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Brothers Junk Removal and Hauling',
            'reviews' => -1,
            'address' => '8209 Elderberry Dr NW',
            'website' => 'https://brotherslocalhauling.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Hiatt\'s Hauling',
            'reviews' => -1,
            'address' => '· (865) 454-3310',
            'website' => null,
            'phone' => '· (865) 454-3310',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Knox Junk Solutions, LLC',
            'reviews' => -2,
            'address' => '· (888) 325-2011',
            'website' => null,
            'phone' => '· (888) 325-2011',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Heeve Ho Junk Removal',
            'reviews' => -6,
            'address' => '· (865) 455-5830',
            'website' => 'https://heeve-ho-junk-removal.ueniweb.com/',
            'phone' => '· (865) 455-5830',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Fam - Junk Removal Knoxville',
            'reviews' => -8,
            'address' => '· (865) 229-9493',
            'website' => null,
            'phone' => '· (865) 229-9493',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Hometown Junk Removal',
            'reviews' => -9,
            'address' => 'Powell, TN',
            'website' => 'https://knoxvillejunkpickup.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Meerkat Junk Removal',
            'reviews' => -12,
            'address' => '8209 Chapman Hwy',
            'website' => 'https://www.meerkatjunkremoval.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Knox De-Clutter Kings',
            'reviews' => -14,
            'address' => '3919 Fountain Valley Dr',
            'website' => 'https://knoxdeclutterkingsjunkremoval.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Removal Heroes',
            'reviews' => -16,
            'address' => '· (865) 888-9222',
            'website' => 'http://www.junkremovalheroes.com/locations/knoxville/',
            'phone' => '· (865) 888-9222',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'King Floyd Junk Removal, LLC',
            'reviews' => -18,
            'address' => '· (865) 321-0228',
            'website' => 'http://www.kingfloydjunkremoval.com/',
            'phone' => '· (865) 321-0228',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Ranger',
            'reviews' => -21,
            'address' => '· (904) 589-4000',
            'website' => 'https://junkrangerusa.com/',
            'phone' => '· (904) 589-4000',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Richmond Junk Solutions',
            'reviews' => -22,
            'address' => '· (865) 806-8832',
            'website' => 'http://www.richmondjunksolutions.org/',
            'phone' => '· (865) 806-8832',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Shepherds Junk Removal & Hauling',
            'reviews' => -24,
            'address' => '4833 McCloud Rd',
            'website' => 'http://shepherdsjunkremoval.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Rubbish Dumpish',
            'reviews' => -24,
            'address' => '· (865) 226-9806',
            'website' => 'https://www.rubbishdumpish.com/',
            'phone' => '· (865) 226-9806',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Bacon Junk Removal',
            'reviews' => -26,
            'address' => '· (865) 254-4464',
            'website' => 'https://baconjunkremoval.com/',
            'phone' => '· (865) 254-4464',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Two Gen Vets',
            'reviews' => -29,
            'address' => 'Seymour, TN',
            'website' => 'https://twogenvets.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => '865 Junk',
            'reviews' => -32,
            'address' => '· (865) 606-1568',
            'website' => 'http://865junk.com/',
            'phone' => '· (865) 606-1568',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Aries Dumpster Rental LLC',
            'reviews' => -32,
            'address' => '· (865) 280-2246',
            'website' => 'http://ariesdumpsterrental.com/',
            'phone' => '· (865) 280-2246',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Foothills Disposal',
            'reviews' => -33,
            'address' => '· (865) 257-9184',
            'website' => 'https://foothillsdisposal.com/',
            'phone' => '· (865) 257-9184',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Haul Away TN Junk Removal',
            'reviews' => -43,
            'address' => '· (865) 385-5515',
            'website' => 'https://www.haulawaytn.com/',
            'phone' => '· (865) 385-5515',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Affordable Demolition & Construction LLC',
            'reviews' => -43,
            'address' => '· (865) 973-6757',
            'website' => 'https://affordabledemolitionconstruction.com/',
            'phone' => '· (865) 973-6757',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Just Call Scott',
            'reviews' => -50,
            'address' => '· (865) 805-3775',
            'website' => 'https://www.justcallscott.com/',
            'phone' => '· (865) 805-3775',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'The Good Truck',
            'reviews' => -51,
            'address' => '203 Perimeter Park Rd A',
            'website' => 'https://thegoodtruck.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'JMK Junk-Away',
            'reviews' => -55,
            'address' => '· (865) 441-7880',
            'website' => 'https://jmkjunk-away.com/',
            'phone' => '· (865) 441-7880',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Trash Pandas LLC',
            'reviews' => -57,
            'address' => '· (865) 279-4252',
            'website' => null,
            'phone' => '· (865) 279-4252',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Williams Removal Services LLC',
            'reviews' => -58,
            'address' => 'Junk Removal Lane',
            'website' => 'https://www.facebook.com/WilliamsAndSonCo',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Patriot Services LLC',
            'reviews' => -63,
            'address' => '7828 Oak Ridge Hwy',
            'website' => 'http://patriotservicestn.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Car Mafia',
            'reviews' => -85,
            'address' => '6915 Old Rutledge Pike',
            'website' => 'https://therealjunkcarmafia.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Out With The Old Junk Removal',
            'reviews' => -97,
            'address' => '· (865) 264-3491',
            'website' => 'https://www.outwiththeoldjunk.com/?utm_source=google&utm_medium=organic&utm_campaign=google_business_profile',
            'phone' => '· (865) 264-3491',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'LoadUp Junk Removal',
            'reviews' => -113,
            'address' => '· (844) 239-7711',
            'website' => 'https://goloadup.com/knoxville/',
            'phone' => '· (844) 239-7711',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => '5 Star Waste',
            'reviews' => -156,
            'address' => '· (865) 988-9737',
            'website' => 'https://5starwaste.com/',
            'phone' => '· (865) 988-9737',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junkfam',
            'reviews' => -162,
            'address' => 'Madisonville, TN',
            'website' => 'http://junkfam.com/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'East Tennessee Junk Away',
            'reviews' => -225,
            'address' => '· (865) 424-6884',
            'website' => 'https://www.easttnjunkaway.com/',
            'phone' => '· (865) 424-6884',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Bin There Dump That Dumpster Rental Knoxville',
            'reviews' => -320,
            'address' => '4421 Whittle Springs Rd',
            'website' => 'https://www.bintheredumpthat.com/knoxville-dumpster-rentals/?utm_source=google&utm_medium=gmb-landing-page&utm_campaign=gmb-knoxville',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Galaxy',
            'reviews' => -350,
            'address' => '· (865) 535-5865',
            'website' => 'https://junkgalaxy.com/',
            'phone' => '· (865) 535-5865',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Griffin Waste Services - Dumpster Rental',
            'reviews' => -354,
            'address' => '1302 Dutch Valley Dr',
            'website' => 'https://griffinwaste.com/dumpster-franchise/knoxville-tn-dumpster-rental/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Farmer & Son Junk Removal and dumpster rental',
            'reviews' => -357,
            'address' => '· (865) 389-2801',
            'website' => null,
            'phone' => '· (865) 389-2801',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'The JunkFather Junk Removal & Hauling',
            'reviews' => -362,
            'address' => '· (865) 236-4316',
            'website' => 'https://www.thejunkfather.us/',
            'phone' => '· (865) 236-4316',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'WASTE CONNECTIONS OF TENNESSEE - KNOXVILLE',
            'reviews' => -733,
            'address' => '2400 Chipman St',
            'website' => 'https://www.wasteconnections.com/knoxville/',
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'nan',
            'reviews' => null,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'nan',
            'reviews' => null,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Tri Star Rentals and Junk Removal LLC',
            'reviews' => null,
            'address' => '852 Bennett Pl',
            'website' => null,
            'phone' => null,
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Big Orange Junk Removal',
            'reviews' => null,
            'address' => '· (865) 321-9167',
            'website' => null,
            'phone' => '· (865) 321-9167',
            'city' => 'Knoxville, TN',
            'contacted' => false,
            'notes' => null,
        ]);
    }
}