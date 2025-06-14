<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDailyCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-daily-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \App\Models\Tasbeeh::query()->update(['count' => 0]);
        $this->info('تم تصفير العداد اليومي بنجاح.');
    }
}
