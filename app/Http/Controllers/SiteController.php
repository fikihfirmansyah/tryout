<?php
/**
 * File name: SiteController.php
 * Last modified: 06/07/21, 11:42 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Http\Controllers;

use App\Settings\HomePageSettings;
use App\Settings\SiteSettings;

class SiteController extends Controller
{
    /**
     * Welcome page
     *
     * @param HomePageSettings $homePageSettings
     * @param SiteSettings $siteSettings
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(HomePageSettings $homePageSettings, SiteSettings $siteSettings)
    {
        return view('store.index', [
            'siteSettings' => $siteSettings,
            'homePageSettings' => $homePageSettings
        ]);
    }
}
