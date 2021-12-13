<?php
/**
 * File name: SettingController.php
 * Last modified: 19/07/21, 12:55 AM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SettingsRepository;
use App\Settings\EmailSettings;
use App\Settings\LocalizationSettings;
use App\Settings\SiteSettings;
use App\Settings\ThemeSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    /**
     * Get General Site Settings Page
     *
     * @param SiteSettings $siteSettings
     * @return \Inertia\Response
     */
    public function general(SiteSettings $siteSettings)
    {
        return Inertia::render('Admin/Settings/GeneralSettings', [
            'siteSettings' => $siteSettings->toArray(),
        ]);
    }

    /**
     * Get Localization Settings Page
     *
     * @param LocalizationSettings $localizationSettings
     * @return \Inertia\Response
     */
    public function localization(LocalizationSettings $localizationSettings)
    {
        $timeZones = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

        return Inertia::render('Admin/Settings/LocalizationSettings', [
            'localizationSettings' => $localizationSettings->toArray(),
            'timezones' => $timeZones,
            'languages' => isoLocaleIdentifiers()
        ]);
    }

    /**
     * Get Email Settings Page
     *
     * @param EmailSettings $emailSettings
     * @return \Inertia\Response
     */
    public function email(EmailSettings $emailSettings)
    {
        return Inertia::render('Admin/Settings/EmailSettings', [
            'emailSettings' => $emailSettings->toArray(),
        ]);
    }

    /**
     * Get Email Settings Page
     *
     * @param ThemeSettings $themeSettings
     * @return \Inertia\Response
     */
    public function theme(ThemeSettings $themeSettings)
    {
        return Inertia::render('Admin/Settings/ThemeSettings', [
            'themeSettings' => $themeSettings->toArray(),
        ]);
    }

    /**
     * Update Site Settings
     *
     * @param Request $request
     * @param SiteSettings $settings
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateSiteSettings(Request $request, SiteSettings $settings)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'app_name' => ['required', 'string', 'max:160'],
            'tag_line' => ['required', 'string', 'max:160'],
            'seo_description' => ['required', 'string', 'max:255'],
            'can_register' => ['required'],
            'logo_path' => ['nullable', 'image', 'mimes:jpg,png', 'max:512'],
            'favicon_path' => ['nullable', 'image', 'mimes:png', 'max:512']
        ])->validateWithBag('updateSiteSettings');

        $settings->app_name = $request->get('app_name');
        $settings->tag_line = $request->get('tag_line');
        $settings->seo_description = $request->get('seo_description');
        $settings->can_register = $request->get('can_register');
        $settings->save();

        $env = DotenvEditor::load();
        $env->setKey('APP_NAME', $request->get('app_name'));
        $env->save();

        return redirect()->back();
    }

    /**
     * Update Site Logo
     *
     * @param Request $request
     * @param SettingsRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateLogo(Request $request, SettingsRepository $repository)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'logo_path' => ['nullable', 'image', 'mimes:jpg,png', 'max:512'],
        ])->validateWithBag('updateLogo');

        if (isset($request['logo_path'])) {
            $repository->updateSiteLogo($request['logo_path']);
        }

        return redirect()->back();
    }

    /**
     * Update White Logo
     *
     * @param Request $request
     * @param SettingsRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateWhiteLogo(Request $request, SettingsRepository $repository)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'white_logo_path' => ['nullable', 'image', 'mimes:jpg,png', 'max:512'],
        ])->validateWithBag('updateWhiteLogo');

        if (isset($request['white_logo_path'])) {
            $repository->updateWhiteLogo($request['white_logo_path']);
        }

        return redirect()->back();
    }

    /**
     * Update Site Favicon
     *
     * @param Request $request
     * @param SettingsRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateFavicon(Request $request, SettingsRepository $repository)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'favicon_path' => ['nullable', 'image', 'mimes:jpg,png', 'max:512'],
        ])->validateWithBag('updateFavicon');

        if (isset($request['favicon_path'])) {
            $repository->updateFavicon($request['favicon_path']);
        }

        return redirect()->back();
    }

    /**
     * Update Localization Settings
     *
     * @param Request $request
     * @param LocalizationSettings $settings
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateLocalizationSettings(Request $request, LocalizationSettings $settings)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'default_locale' => ['required', 'max:255'],
            'default_direction' => ['required', 'max:255'],
            'default_timezone' => ['required', 'max:255'],
        ])->validateWithBag('updateLocalizationSettings');

        $settings->default_locale = $request->get('default_locale');
        $settings->default_direction = $request->get('default_direction');
        $settings->default_timezone = $request->get('default_timezone');
        $settings->save();

        $env = DotenvEditor::load();
        $env->setKey('APP_LOCALE', $request->get('default_locale'));
        $env->save();

        return redirect()->back();
    }

    /**
     * Update Email Settings
     *
     * @param Request $request
     * @param EmailSettings $settings
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateEmailSettings(Request $request, EmailSettings $settings)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'host' => ['required', 'string', 'max:250'],
            'port' => ['required', 'numeric'],
            'username' => ['required', 'string', 'max:1024'],
            'password' => ['required', 'string', 'max:1024'],
            'encryption' => ['required', 'string', 'max:250'],
            'from_address' => ['required', 'string', 'max:1024'],
            'from_name' => ['required', 'string', 'max:1024'],
        ])->validateWithBag('updateSiteSettings');

        $settings->host = $request->get('host');
        $settings->port = $request->get('port');
        $settings->username = $request->get('username');
        $settings->password = $request->get('password');
        $settings->encryption = $request->get('encryption');
        $settings->from_address = $request->get('from_address');
        $settings->from_name = $request->get('from_name');
        $settings->save();

        $env = DotenvEditor::load();
        $env->setKey('MAIL_HOST', $request->get('host'));
        $env->setKey('MAIL_PORT', $request->get('port'));
        $env->setKey('MAIL_USERNAME', $request->get('username'));
        $env->setKey('MAIL_PASSWORD', $request->get('password'));
        $env->setKey('MAIL_ENCRYPTION', $request->get('encryption'));
        $env->setKey('MAIL_FROM_ADDRESS', $request->get('from_address'));
        $env->setKey('MAIL_FROM_NAME', $request->get('from_name'));
        $env->save();

        return redirect()->back();
    }

    /**
     * Update Email Settings
     *
     * @param Request $request
     * @param ThemeSettings $settings
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateThemeSettings(Request $request, ThemeSettings $settings)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'primary_color' => ['required', 'string', 'max:60'],
            'secondary_color' => ['required', 'string', 'max:60'],
        ])->validateWithBag('updateThemeSettings');

        $settings->primary_color = $request->get('primary_color');
        $settings->secondary_color = $request->get('secondary_color');
        $settings->save();

        return redirect()->back();
    }

    /**
     * Update Email Settings
     *
     * @param Request $request
     * @param ThemeSettings $settings
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateFontSettings(Request $request, ThemeSettings $settings)
    {
        if(config('qwiktest.demo_mode')) {
            return redirect()->back()->with('errorMessage', 'Demo Mode! These settings can\'t be changed.');
        }

        Validator::make($request->all(), [
            'default_font' => ['required', 'string', 'max:100'],
            'default_font_url' => ['required', 'string', 'max:1000'],
        ])->validateWithBag('updateFontSettings');

        $env = DotenvEditor::load();
        $env->setKey('DEFAULT_FONT', $request->get('default_font'));
        $env->setKey('DEFAULT_FONT_URL', $request->get('default_font_url'));
        $env->save();

        $settings->default_font = $request->get('default_font');
        $settings->default_font_url = $request->get('default_font_url');
        $settings->save();

        return redirect()->back();
    }
}
