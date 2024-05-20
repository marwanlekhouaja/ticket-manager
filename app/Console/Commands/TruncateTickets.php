<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TruncateTickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tickets:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncate the tickets and historiques tables and reset ticket numbering.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Truncate the tickets and historiques tables
        DB::table('tickets')->truncate();
        DB::table('historiques')->truncate();

        $this->info('The tickets and historiques tables have been truncated successfully.');
    }
}
