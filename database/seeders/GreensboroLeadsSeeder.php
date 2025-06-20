<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lead;

class GreensboroLeadsSeeder extends Seeder
{
    public function run()
    {
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Doctors',
            'reviews' => -271,
            'address' => null,
            'website' => 'https://junkdrs.com/service-areas/greensboro/',
            'phone' => '(984) 223-9223',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'LoadUp Junk Removal',
            'reviews' => -287,
            'address' => null,
            'website' => 'https://goloadup.com/greensboro/',
            'phone' => '(844) 239-7711',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Pick Your Part - Greensboro',
            'reviews' => -532,
            'address' => null,
            'website' => 'https://locations.lkqpickyourpart.com/en-us/nc/greensboro/100-ward-road/',
            'phone' => '(800) 962-2277',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Magic Garbage Removal | Junk Removal',
            'reviews' => -75,
            'address' => null,
            'website' => 'https://www.magicgarbageremoval.com/',
            'phone' => '(689) 233-9829',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Magic Garbage Removal | Junk Removal',
            'reviews' => -75,
            'address' => null,
            'website' => 'https://www.magicgarbageremoval.com/',
            'phone' => '(689) 233-9829',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Raider - Junk Removal of Greensboro, NC',
            'reviews' => -100,
            'address' => null,
            'website' => 'http://www.junkraider.com/',
            'phone' => '(336) 999-9440',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'TCC Junk Removal',
            'reviews' => -526,
            'address' => null,
            'website' => 'https://tccjunkremoval.com/',
            'phone' => '(336) 916-9169',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'A2Z Cash for Junk Cars/ Junk Car For Cash Removal',
            'reviews' => -24,
            'address' => null,
            'website' => 'https://www.a2ztow.com/junk-cars-removal',
            'phone' => '(336) 833-0737',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk King Greensboro',
            'reviews' => -853,
            'address' => null,
            'website' => 'https://www.junk-king.com/locations/greensboro?cid=LSTL_JKG-US000187&utm_source=gmb&utm_campaign=local&utm_medium=organic',
            'phone' => '(336) 814-2939',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'X-Pert Solutions Junk Removal',
            'reviews' => -60,
            'address' => null,
            'website' => 'https://xpsnc.com/',
            'phone' => '(336) 756-9787',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Republic Services Bishop Road Transfer Station',
            'reviews' => -249,
            'address' => null,
            'website' => 'https://www.republicservices.com/customer-support/facilities?utm_medium=yext&utm_source=rslistings',
            'phone' => '(336) 724-0842',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'All My Sons Moving & Storage',
            'reviews' => -2410,
            'address' => null,
            'website' => 'https://www.allmysons.com/north-carolina/greensboro/index.aspx?utm_source=GMBlisting&utm_medium=organic&phone=336-715-3519',
            'phone' => '(336) 715-3519',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Ur Junk Removal Piedmont Triad',
            'reviews' => -6,
            'address' => null,
            'website' => 'https://www.junkremovalsgreensboronc.com/',
            'phone' => '(336) 580-5456',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Ur Junk Removal Triad',
            'reviews' => -19,
            'address' => null,
            'website' => 'http://urjunkremoval.com/?utm_source=gmb&utm_medium=referral',
            'phone' => '(336) 580-5456',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Pros Moving & Junk Removal',
            'reviews' => -109,
            'address' => null,
            'website' => 'https://www.junkprosnc.com/',
            'phone' => '(336) 455-6167',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'JunkGurus Junk Removal',
            'reviews' => -74,
            'address' => null,
            'website' => 'http://junkgurus.us/',
            'phone' => '(336) 441-5865',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Ahlgren\'s Transport',
            'reviews' => -364,
            'address' => null,
            'website' => 'https://ahlgrenstransport.com/?utm_source=local&utm_medium=organic&utm_campaign=google_my_business',
            'phone' => '(336) 416-1654',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Magnificent movers',
            'reviews' => -12,
            'address' => null,
            'website' => null,
            'phone' => '(336) 402-3332',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Pro Hauling Junk Removal',
            'reviews' => -95,
            'address' => null,
            'website' => 'http://www.prohaulingllc.com/',
            'phone' => '(336) 355-7256',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'VETS Junk Removal',
            'reviews' => -28,
            'address' => null,
            'website' => 'https://www.vetseasytrash.com/service-areas/greensboro-nc/',
            'phone' => '(336) 313-9381',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'VETS Junk Removal',
            'reviews' => -28,
            'address' => null,
            'website' => 'https://www.vetseasytrash.com/service-areas/greensboro-nc/',
            'phone' => '(336) 313-9381',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Greensboro Junk Pro',
            'reviews' => -13,
            'address' => null,
            'website' => 'https://greensborojunkpro.com/',
            'phone' => '(336) 308-0550',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Old Sarge\'s Junk Removal LLC',
            'reviews' => -294,
            'address' => null,
            'website' => 'http://oldsargesjunkremoval.com/',
            'phone' => '(336) 306-3461',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Old Sarge\'s Junk Removal LLC',
            'reviews' => -294,
            'address' => null,
            'website' => 'http://oldsargesjunkremoval.com/',
            'phone' => '(336) 306-3461',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Mack Daddy Dumpsters',
            'reviews' => -69,
            'address' => null,
            'website' => 'https://www.mackdaddydumpsters.com/',
            'phone' => '(336) 296-1470',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Greensboro Dumpsters',
            'reviews' => -2,
            'address' => null,
            'website' => null,
            'phone' => '(336) 291-3592',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Greensboro Cash for Junk Cars/ Junk Car For Cash Removal',
            'reviews' => -3,
            'address' => null,
            'website' => 'https://www.a2zautocar.com/junk-car-removal',
            'phone' => '(336) 233-8070',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'SERVPRO of Burlington',
            'reviews' => -49,
            'address' => null,
            'website' => 'https://www.servpro.com/locations/nc/servpro-of-burlington?utm_medium=yext&utm_source=gmb',
            'phone' => '(336) 229-1156',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Carson Dumpster Rentals',
            'reviews' => -44,
            'address' => null,
            'website' => 'http://www.carsondumpsterrental.com/',
            'phone' => '(336) 203-7699',
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Go Get It Cars',
            'reviews' => -1,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'D.L Crews Trucking',
            'reviews' => -2,
            'address' => null,
            'website' => 'https://dlcrewstrucking.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Strong Arm Junk Removal',
            'reviews' => -2,
            'address' => null,
            'website' => 'http://strongarmjunkremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Shot of Greensboro, NC',
            'reviews' => -4,
            'address' => null,
            'website' => 'http://www.junkshotapp.com/greensboro',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => '4 Seasons Lawn & Home Care',
            'reviews' => -6,
            'address' => null,
            'website' => 'https://www.facebook.com/profile.php?id=61576196243264',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'ABS Junk Removal',
            'reviews' => -9,
            'address' => null,
            'website' => 'http://absjunk.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'M & V\'s Junk Removal - Greensboro',
            'reviews' => -10,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Goldston Junk Removal & Dumpster Rental',
            'reviews' => -10,
            'address' => null,
            'website' => 'https://www.gdumpsterrentaljunkremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'M&L Hauling & Junk Removal',
            'reviews' => -11,
            'address' => null,
            'website' => 'https://www.mlhaulingjunk.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Dogs Trash Removal',
            'reviews' => -17,
            'address' => null,
            'website' => 'https://junkdogstrashremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Dogs Trash Removal',
            'reviews' => -17,
            'address' => null,
            'website' => 'https://junkdogstrashremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'All Things Junk LLC',
            'reviews' => -20,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'AJ\'s Hauling and Junk Removal',
            'reviews' => -33,
            'address' => null,
            'website' => 'https://www.ajshauling-junkremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Triad Junk Removal, LLC',
            'reviews' => -44,
            'address' => null,
            'website' => 'https://www.triadjunkremoval.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Shot of Greensboro',
            'reviews' => -44,
            'address' => null,
            'website' => 'https://www.junkshotapp.com/greensboro-nc/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Haul Away Junk Removal & Demolition LLC',
            'reviews' => -59,
            'address' => null,
            'website' => null,
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Budget Dumpster',
            'reviews' => -70,
            'address' => null,
            'website' => 'https://www.budgetdumpster.com/greensboro-nc-dumpster-rental-north-carolina.php?utm_medium=organic&utm_source=gbp&utm_campaign=greensboro-nc_local',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Bin There Dump That',
            'reviews' => -75,
            'address' => null,
            'website' => 'https://greensboro.bintheredumpthatusa.com/?utm_source=google&utm_medium=gmb-landing-page&utm_campaign=gmb-greensboro',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Good Ole Boys Cleanup',
            'reviews' => -136,
            'address' => null,
            'website' => 'https://goodoleboyscleanup.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'L&D Demolition & Junk Removal LLC',
            'reviews' => -141,
            'address' => null,
            'website' => 'https://lndjunkremovalnc.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => '1 Stop Services LLC',
            'reviews' => -161,
            'address' => null,
            'website' => 'https://1stopservicesllc.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => '1-800-GOT-JUNK? Greensboro',
            'reviews' => -326,
            'address' => null,
            'website' => 'https://www.1800gotjunk.com/us_en/locations/junk-removal-piedmont-triad/us03036?utm_source=googleplus&utm_medium=maps&utm_campaign=greensboro',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'Junk Mavericks',
            'reviews' => -492,
            'address' => null,
            'website' => 'https://junkmavericks.com/',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
        Lead::create([
            'id' => Str::uuid(),
            'name' => 'College Hunks Hauling Junk and Moving Greensboro',
            'reviews' => -644,
            'address' => null,
            'website' => 'https://collegehunkshaulingjunk.com/locations/nc/greensboro/?utm_source=google&utm_medium=map&utm_campaign=nc-greensboro-71&utm_content=qiigo-listings',
            'phone' => null,
            'city' => 'Greensboro, NC',
            'contacted' => false,
            'notes' => null,
        ]);
    }
}