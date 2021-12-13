<?php
/**
 * File name: HomePageSettings.php
 * Last modified: 19/05/21, 7:39 PM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeroSettings extends Settings
{
    public string $title;
    public string $subtitle;
    public string $cta_text;
    public string $cta_link;
    public string $image_path;

    public static function group(): string
    {
        return 'hero';
    }
}
