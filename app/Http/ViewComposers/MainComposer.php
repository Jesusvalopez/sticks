<?php

namespace App\Http\ViewComposers;

use App\Module;
use Illuminate\Contracts\View\View;


class MainComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $modules = Module::all();
        $view->with('modules', $modules);
    }

}