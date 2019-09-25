<?php

use Illuminate\Database\Seeder;
use App\MakeWebPage;

class WebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aWebPage = new MakeWebPage;

        $aWebPage->siteName = 'woohoo';
        $aWebPage->hero = 'Evening way luckily son exposed get general greatly';
        $aWebPage->fontType = 'Rubik';
        $aWebPage->background_image = 'bulbasaur_1565021301.jpg';
        $aWebPage->colour1 = 'Blue';
        $aWebPage->colour2 = 'Purple';
        $aWebPage->colour3 = 'Yellow';
        $aWebPage->user_id = 1;

        $aWebPage->save();

        $aWebPage2 = new MakeWebPage;

        $aWebPage2->siteName = 'lookatthis';
        $aWebPage2->hero = 'Especially favourable compliment but thoroughly unreserved saw she themselves';
        $aWebPage2->fontType = 'IBM Plex Sans';
        $aWebPage2->background_image = 'pikachu_1565027081.jpg';
        $aWebPage2->colour1 = 'Red';
        $aWebPage2->colour2 = 'Grey';
        $aWebPage2->colour3 = 'Yellow';
        $aWebPage2->user_id = 1;

        $aWebPage2->save();

        $aWebPage3 = new MakeWebPage;

        $aWebPage3->siteName = 'newwebsite';
        $aWebPage3->hero = 'Four need spot ye said we find mile.';
        $aWebPage3->fontType = 'Space Mono';
        $aWebPage3->background_image = 'squirtle_1565036866.jpg';
        $aWebPage3->colour1 = 'Red';
        $aWebPage3->colour2 = 'Blue';
        $aWebPage3->colour3 = 'Orange';
        $aWebPage3->user_id = 2;

        $aWebPage3->save();
    }
}
