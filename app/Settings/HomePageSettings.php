<?php
/**
 * File name: HomePageSettings.php
 * Last modified: 19/05/21, 7:39 PM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSettings extends Settings
{
    public bool $enable_top_bar;
    public bool $enable_search;
    public bool $enable_hero;
    public bool $enable_features;
    public bool $enable_categories;
    public bool $enable_stats;
    public bool $enable_testimonials;
    public bool $enable_cta;
    public bool $enable_footer;

    public static function group(): string
    {
        return 'home_page';
    }
}
