<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    public const DBNAME = 'widgets';

    protected $table = self::DBNAME;

    private static array $widgetCache = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ident', 'content', 'sort_id', 'preload',
    ];

    public static function preload(): void
    {
        $widgets = self::where('preload', '=', '1')
            ->get();
        foreach ($widgets as $widget) {
            self::$widgetCache[$widget->ident] = $widget;
        }
    }

    public static function view(string $ident): Widget|null
    {
        if (isset(self::$widgetCache[$ident])) {
            return self::$widgetCache[$ident];
        }

        return self::where('ident', '=', $ident)
            ->first();
    }

}
