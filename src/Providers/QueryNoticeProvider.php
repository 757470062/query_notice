<?php

namespace BugsLife\QueryNotice\Providers;

use App\Libraries\QueryNotice\Notice;
use Illuminate\Support\ServiceProvider;

class QueryNoticeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Notice $notice)
    {
        $this->publishes([
            __DIR__.'/path/to/config/params.php' => config_path('queryNotice.php'),
        ]);

        //Notice open all object.
        if (config('queryNotice.is_all_object')){
            $notice->notice();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Libraries\QueryNotice\Notice::class,\App\Libraries\QueryNotice\QueryNotice::class);
    }
}
