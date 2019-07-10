<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Illuminate\Database\Schema\Blueprint::macro('dateTimes', function ($precision = 0) {

            $this->dateTime('created_at', $precision)->nullable()->comment('创建时间');

            $this->dateTime('updated_at', $precision)->nullable()->comment('编辑时间');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('zh');

        // 前台模板路径前缀
        $this->loadViewsFrom(resource_path('views/front'), 'front');

        // 后台模板路径
        $this->loadViewsFrom(resource_path('views/admin'), 'crm-admin');
    }
}
