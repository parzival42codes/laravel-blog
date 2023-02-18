<?php

namespace App\Helpers;

use App\Models\Widget;
use View;

class WidgetHelper
{
    public static function getWidget(string $ident): string
    {
        $widget = Widget::view($ident);
        d($widget);

        if (!$widget) {
            return View::make('error.widgetNotFound', [
                'ident' => $ident,
            ])->render();
        }
        die();
    }
}
