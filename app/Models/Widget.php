<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'name', 'email', 'password',
    ];

    public static function preload(): void
    {
        $widgets = Widget::where('preload', '=', '1')
            ->get();
        foreach ($widgets as $widget) {
            self::$widgetCache[$widget->ident] = $widget;
        }
    }

    public static function view(string $ident): Widget
    {
        if (isset(self::$widgetCache[$ident])) {
            return self::$widgetCache[$ident];
        }

        return Widget::where('ident', '=', $ident)
            ->firstOrFail();
    }

}
