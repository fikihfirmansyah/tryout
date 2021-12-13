<?php

namespace App\View\Components;

use App\Settings\FooterSettings;
use App\Settings\SiteSettings;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * @var FooterSettings
     */
    private FooterSettings $footerSettings;

    /**
     * Create a new component instance.
     *
     * @param FooterSettings $footerSettings
     */
    public function __construct(FooterSettings $footerSettings)
    {
        $this->footerSettings = $footerSettings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer', [
            'footerSettings' => $this->footerSettings,
            'siteSettings' => app(SiteSettings::class)->toArray()
        ]);
    }
}
