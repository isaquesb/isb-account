<?php
namespace Isb\Account\Console\Commands;

use Illuminate\Console\Command;
use Isb\Account\Status\Status;
use Isb\Account\Type;

class AddStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'isb-account:add-status
                            {id : Type ID}
                            {name : Type Name}';
    /**
     * @var string
     */
    protected $description = 'Add Account Status';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $row = new Status();
        $row->forceFill([
            'id' => $this->argument('id'),
            'name' => $this->argument('name')
        ]);
        $row->save();
        $this->info('Status ' . $row->id . ' - ' . $row->name . ' added successfully');
    }
}
