<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FetchBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'libapp:fetch_books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves book data from Harvard library Rest API ...';

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
     * @return int
     */
    public function handle()
    {
        $this->output->writeln("command...");
    }
}
