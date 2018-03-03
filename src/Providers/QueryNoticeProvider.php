<?php

namespace BugsLife\QueryNotice\Providers;

use BugsLife\QueryNotice\Notice;
use Illuminate\Support\ServiceProvider;

class QueryNoticeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot(Notice $notice)
    {
        /*
         * Set config
         */
        $this->publishes([
            __DIR__ . '/../config/queryNotice.php' => config_path('queryNotice.php'),
        ], 'queryNotice');

        /*
         *
         */
        $this->mergeConfigFrom(__DIR__ . '/../config/queryNotice.php', 'queryNotice');

        /*
         * Set mail views
         */
        $this->publishes([
            __DIR__ . '/../views/mail/query-notice.blade.php' => resource_path('views/query-notice', 'queryNotice'),
        ]);

        //Notice open all object.
        if (config('queryNotice.is_all_object')) {
            $notice->notice();
        }
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        $this->app->bind(\BugsLife\QueryNotice\Notice::class, \BugsLife\QueryNotice\QueryNotice::class);
    }
}
