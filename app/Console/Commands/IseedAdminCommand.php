<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class IseedAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成后台的所有数据为 seeder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('iseed admin_users,admin_roles,admin_permissions,admin_menu,admin_user_permissions,admin_role_users,admin_role_permissions,admin_role_menu --force');
        // Artisan::call('iseed admin_roles --force');
        // Artisan::call('iseed admin_permissions --force');
        // Artisan::call('iseed admin_menu --force');
        // Artisan::call('iseed admin_user_permissions --force');
        // Artisan::call('iseed admin_role_users --force');
        // Artisan::call('iseed admin_role_permissions --force');
        // Artisan::call('iseed admin_role_menu --force');
    }
}
