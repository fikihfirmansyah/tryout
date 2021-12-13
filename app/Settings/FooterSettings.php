<?php
/**
 * File name: FooterSettings.php
 * Last modified: 21/06/21, 11:22 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FooterSettings extends Settings
{
    public string $copyright_text;
    public bool $enable_links;
    public array $footer_links;
    public bool $enable_social_links;
    public array $social_links;

    public static function group(): string
    {
        return 'footer';
    }
}
