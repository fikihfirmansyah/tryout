<?php
/**
 * File name: LocalizationSettings.php
 * Last modified: 21/06/21, 11:22 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CategorySettings extends Settings
{
    public string $title;
    public string $subtitle;
    public int $limit;

    public static function group(): string
    {
        return 'category';
    }
}
