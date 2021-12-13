<?php
/**
 * File name: LocalizationSettings.php
 * Last modified: 21/06/21, 11:22 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CtaSettings extends Settings
{
    public string $title;
    public string $subtitle;
    public string $button_text;
    public string $button_link;

    public static function group(): string
    {
        return 'cta';
    }
}
