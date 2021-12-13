<?php

namespace App\View\Components;

use App\Settings\TopBarSettings;
use Illuminate\View\Component;

class TopBar extends Component
{
    /**
     * @var TopBarSettings
     */
    private TopBarSettings $settings;

    /**
     * Create a new component instance.
     *
     * @param TopBarSettings $settings
     */
    public function __construct(TopBarSettings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-bar', $this->settings);
    }
}
