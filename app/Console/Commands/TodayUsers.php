<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TodayUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'TodayUsers:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este laravel cronjob se usa para verificar cuántos usuarios se registraron hoy.';

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
        $count = \DB::table('users')
        ->whereDate('created_at', '=', date('Y-m-d'))
        ->count();

        echo "Today $count users registered";
    }
}
