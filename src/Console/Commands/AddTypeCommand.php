<?php
namespace Isb\Account\Console\Commands;

use Illuminate\Console\Command;
use Isb\Account\Type;

class AddTypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'isb-account:add-type
                            {id : Type ID}
                            {name : Type Name}';
    /**
     * @var string
     */
    protected $description = 'Add Account Type';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $row = new Type();
        $row->forceFill([
            'id' => $this->argument('id'),
            'name' => $this->argument('name')
        ]);
        $row->save();
        $this->info('Type ' . $row->name . ' added successfully');
    }
}
