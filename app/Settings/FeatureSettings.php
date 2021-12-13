<?php
/**
 * File name: LocalizationSettings.php
 * Last modified: 21/06/21, 11:22 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FeatureSettings extends Settings
{
    public string $title;
    public string $subtitle;
    public array $feature1;
    public array $feature2;
    public array $feature3;
    public array $feature4;

    public static function group(): string
    {
        return 'features';
    }
}
