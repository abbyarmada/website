<?php

namespace CTP\Http\Controllers\Site;

use CTP\Data\Event as EventData;
use View;

abstract class SiteController extends \CTP\Http\Controllers\Controller
{
    protected $event = null;

    public function __construct()
    {
        $this->event = EventData::whereActive(true)->first();
    }

    public function viewMake($template)
    {
        $template = View::make($template);

        $template->with('_event', $this->event);

        return $template;
    }
}
