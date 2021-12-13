<?php

namespace App\Http\Controllers;

use App\Models\PracticeSession;
use App\Models\QuizSession;
use App\Repositories\UserPracticeSetRepository;
use App\Repositories\UserQuizRepository;
use Jackiedo\DotenvEditor\Exceptions\KeyNotFoundException;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Artisan;

class AppUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    /**
     * Update env file, configure storage and cache after update
     * The following logic may be different from version to version.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function onSuccessfulUpdate()
    {
        //Check app is installed properly
        $installed = file_exists(storage_path('installed'));
        $env = DotenvEditor::load();

        try {
            $currentVersion = $env->getValue('APP_VERSION');
        } catch (KeyNotFoundException $exception) {
            return redirect()->back()->with('errorMessage', 'Unable to find current version. Please check APP_VERSION in .env file is set to the current version.');
        }

        // check if app is already updated
        if($currentVersion == '1.2.0') {
            return redirect()->back()->with('successMessage', 'App is already up to date');
        }

        $canUpdate = $currentVersion == '1.1.0';

        // If installed and not updated, continue to update
        if($installed && $canUpdate) {
            //Update new app version
            $env->setKey('APP_VERSION', '1.2.0');
            $env->setKey('DEFAULT_FONT', 'Inter');
            $env->setKey('DEFAULT_FONT_URL', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
            $env->save();

            Artisan::call('config:clear');
            Artisan::call('cache:clear');
            Artisan::call('storage:link');

            return redirect()->route('welcome')->with('successMessage', 'App Successfully Updated');
        }

        return redirect()->back()->with('errorMessage', 'Nothing to update');
    }
}
