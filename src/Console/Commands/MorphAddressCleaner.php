<?php

namespace WalkerChiu\MorphAddress\Console\Commands;

use WalkerChiu\Core\Console\Commands\Cleaner;

class MorphAddressCleaner extends Cleaner
{
    /**
     * The name and signature of the console command.
     *
     * @var String
     */
    protected $signature = 'command:MorphAddressCleaner';

    /**
     * The console command description.
     *
     * @var String
     */
    protected $description = 'Truncate tables';

    /**
     * Execute the console command.
     *
     * @return Mixed
     */
    public function handle()
    {
        parent::clean('morph-address');
    }
}
