<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('portfolios')->insert([
          'name' => 'P.E.A.C.E. Hack 2016 - 2nd Place Winner',
          'description' => 'Perceive, Engage, Alert, Communicate, Educate or P.E.A.C.E. which is the theme of the said hackathon. I created an web app which is an opinion mining for N.G.O.s. Scrapping twitter sentiment analysis and news in Philippines. <a href="http://www.techblade.ph/2016/10/tech-enthusiasts-develop-apps-for-peace.html" target="_blank">Techblade.ph article</a>',
          'url' => 'https://peacehack2016.gigamike.net',
          'image_filename' => 'peace-hack-2016-2nd-place-winner.jpg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-20 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Google CodeBlaze 2017 - 3rd Place Winner',
          'description' => 'The theme of Google CodeBlaze 2017 was to help Small Medium Enterprise (S.M.E.) businesses. I created a portal web app where S.M.E.\'s can loan.',
          'url' => 'https://codeblaze2017.gigamike.net/',
          'image_filename' => 'google-codeblaze-2017-3rd-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-19 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Code For The Kingdom 2017 - 1st Place Winner',
          'description' => 'I developed a web app called Douleuo. Douleuo is a greek word meaning to serve someone which the word ministry is derived from. Its a ministry portal for OFW and its family to easily reach out for ministries.',
          'url' => 'https://c4tk2016.gigamike.net',
          'image_filename' => 'code-for-the-kingdom-2017-1st-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-18 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Devcon Raspberry PI Hackathon 2018 - 1st Place Winner',
          'description' => 'I created a security app using motion sensors. Everytime a motion is detected, i send an email and SMS notification to owner.',
          'url' => null,
          'image_filename' => 'devcon-raspberry-pi-hackathon-2018-1st-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-17 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Clash Of Code 2019 - 3rd Place Winner',
          'description' => 'Its an 8 hours hackathon wherein you need to create an event app similar to eventbrite with admin and using MultiSys API such as Bayad Center and SMS API. For more details please check my blog "<a href="https://www.alexachamp.com/clash-of-code-2019-hackathon-experience/" target="_blank">Clash of Code 2019 Hackathon Experience</a>".',
          'url' => 'https://clashofcodes2019.gigamike.net/',
          'image_filename' => 'clash-of-code-2019-3rd-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-16 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'HackManila 2018 - 1st Place Winner',
          'description' => 'Hack Manila 2018 was the first of August 99\'s large-scale hackathons. "Mik Galon, aka GigaMike, built a remarkable system that impressed every Hack Manila mentor. He succeeded in creating an app for the PartnerPortal Challenge, sponsored by Oqulo, which allows users to avail great products from brand partners at discounted rates.

He also added more capabilities to his app that went above and beyond the expectations for the weekend\'s hackathon, such as a 360° VR Product Preview, Alexa Skills using an Amazon Echo, and a Payment Gateway via Blockchain.

What\'s even more impressive is that he achieved all these on his own one-man-team." <a href="https://hackmanila.com/" target="_blank">hackmanila.com</a>',
          'url' => 'https://hackmanila2018.gigamike.net/',
          'image_filename' => 'hackmanila-2018-1st-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-15 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Break The Fake 2019 - 3rd Place Winner',
          'description' => 'Addressing the asian struggle on fake news and disinformation through technology. I created an app that certify or badge a blog, a yellow pages and portal of certified blogs and APIs. For more details please check my blog "<a href="https://www.alexachamp.com/breakthefake-manila-hackathon-2019-experience/" target="_blank">BreakTheFake Manila Hackathon 2019 Experience</a>".',
          'url' => 'https://breakthefake2019.gigamike.net/',
          'image_filename' => 'break-the-fake-2019-3rd-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-14 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'JCI Baras',
          'description' => 'Being part of <a href="https://www.jci.org.ph/jci/" target="_blank">J.C.I.</a> specifically JCI Mandaluyong, I helped my friends from JCI Baras.',
          'url' => 'https://jcibaras.org.ph/',
          'image_filename' => 'jci-baras.jpeg',
          'portfolio_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-13 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'UK Phone',
          'description' => 'Yellow pages in U.K. I developed a C.M.S. using Yii Framework.',
          'url' => 'https://uk-phone.gigamike.net/',
          'image_filename' => 'uk-phone.jpeg',
          'portfolio_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-12 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'All About Web Hosting',
          'description' => 'I\'m a backend developer and I love servers. I tried affiliate marketing by reselling servers.',
          'url' => 'https://allaboutwebhosting.gigamike.net/',
          'image_filename' => 'all-about-web-hosting.jpeg',
          'portfolio_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-11 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Decentralized Innovations Startups\' Hackathon - DISH 2019 - 1st Place Winner',
          'description' => 'The winner of this year’s DISH is Michael Galon’s (Gigamike’s) ProsperEOS (PEOS), a completely decentralized funding platform. Mr. Galon opted for a product that aims to solve problems of existing funding platforms. These problems include the tracking of money, the lack of engagement, lack of resources, and marketing for projects.  <a href="https://bitpinas.com/feature/dish-2019-feature-gigamikes-prospereos/" target="_blank">bitpinas.com</a>. For more details please check my blog "<a href="https://www.alexachamp.com/my-decentralized-innovations-startups-hackathon-dish-2019-experience/" target="_blank">My Decentralized Innovations Startups\' Hackathon – DISH 2019 Experience</a>".',
          'url' => 'https://blockstarter.gigamike.net/',
          'image_filename' => 'decentralized-innovations-startups-hackathon-dish-2019-1st-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-10 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Angel Hack Manila 2019 - 1st Place Winner',
          'description' => 'The theme of AngelHack Manila 2019 hackathon is any topic about social good and using there sponsor Amazon Web Services. I created an app "a personal coach" that will keep you healthy and fit. For more details please check my blog "<a href="https://www.alexachamp.com/angelhack-manila-2019-hackathon-experience/" target="_blank">AngelHack Manila 2019 Hackathon Experience</a>."',
          'url' => 'https://angelhack2019.gigamike.net/',
          'image_filename' => 'angel-hack-manila-2019-1st-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-9 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'PH Phone',
          'description' => 'I tried my luck to earn from advertisements. I created a scrapper that scraps Philippines establishment and commercial telephone numbers, social site, website and address. A yellow pages website.',
          'url' => 'https://ph-phone.gigamike.net/',
          'image_filename' => 'ph-phone.jpeg',
          'portfolio_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-8 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Lotto Insights',
          'description' => 'I got this idea when i joined <a href="https://www.facebook.com/devcup/" target="_blank">Devcup Hackathon</a>. The theme for tha said hackathon was "Insights". I developed an app that gives Lotto Number Frequency and Lotto combination tools.',
          'url' => 'https://pcso-games.gigamike.net/',
          'image_filename' => 'lotto-insights.jpeg',
          'portfolio_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-7 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'AlexaChamp.com',
          'description' => 'My Alexa Skills and Personal Blog. I also talk or share my Alexa Skills development. I\'m part of <a href="http://www.awsug.ph/speakers.php?id=2" target="_blank">AWS UG PH</a> core member.',
          'url' => 'https://www.alexachamp.com/',
          'image_filename' => 'alexachampcom.jpeg',
          'portfolio_tag_id' => 4,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-6 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'U:Hack Real Estate And Liveable Cities Hackathon 2019 - 2nd Place Winner',
          'description' => 'Hackaton sponsored by <a href="https://www.facebook.com/ubxphilippines/posts/535623463860483" target="_blank">UnionBank (UBX)</a>. There are 3 categories or problems to choose from, Property, Cities, and Communities. We selected Property. We created an app that solves realtors/constructors slow process of procurement. For more details please check my blog "<a href="https://www.alexachamp.com/uhack-real-estate-and-liveable-cities-hackathon-2019-experience/" target="_blank">UHack Real Estate And Liveable Cities Hackathon 2019 Experience</a>."',
          'url' => 'https://uhack2019.gigamike.net/',
          'image_filename' => 'uhack-real-estate-and-liveable-cities-hackathon-2019-2nd-place-winner.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-5 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'HR Global Johnson and Johnson 2019 - People\'s Choice Award',
          'description' => 'It\'s the global HR Johnson and Johnson hackathon which joined by Singapore, China and Philippines. Luckily we are the only winner in Philippines. There challenge was to anticipate HR concerns via tech to increase productivity. For more details please check my blog "<a href="https://www.alexachamp.com/hr-global-johnson-and-johnson-2019-hackathon-experience/" target="_blank">HR Global Johnson and Johnson 2019 Hackathon Experience</a>".',
          'url' => 'https://jandj2019.gigamike.net/',
          'image_filename' => 'hr-global-johnson-and-johnson-2019-peoples-choice-award.jpeg',
          'portfolio_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-4 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Hackathon.ph',
          'description' => 'I love hackathons. I setup a portal for all Philippines hackathon events.',
          'url' => 'https://www.hackathon.ph/',
          'image_filename' => 'hackathonph.jpeg',
          'portfolio_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-3 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Striking Media',
          'description' => 'Dashboard, Analytics, Web Scrapping, APIs, Email Marketing and more.',
          'url' => 'https://strikingmedia.gigamike.net/',
          'image_filename' => 'striking-media.jpeg',
          'portfolio_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-2 seconds")),
      ]);
      DB::table('portfolios')->insert([
          'name' => 'Gigamike.net',
          'description' => 'My portfolio. Upgraded my site from PHP7.1/ZF3 to PHP 7.3/Laravel 6.',
          'url' => 'https://www.gigamike.net/',
          'image_filename' => 'gigamikenet.jpeg',
          'portfolio_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s', strtotime("-1 seconds")),
      ]);
    }
}
