<?php

namespace App\Providers;

use App\Helpers\BladeHelper;
use App\Helpers\Debug;
use App\Helpers\Icon;
use App\Models\User;
use App\Models\Widget;
use Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Str;
use View;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

//        Blade::directive('widget', function ($expression) {
/*            return '<?php  ?>';*/
//        });

    }

}
