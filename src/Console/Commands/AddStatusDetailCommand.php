<?php
namespace Isb\Account\Console\Commands;

use Illuminate\Console\Command;
use Isb\Account\Status\Detail;

class AddStatusDetailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'isb-account:add-status-detail
                            {status_id : Status ID}
                            {id : Detail ID}
                            {name : Detail Name}';
    /**
     * @var string
     */
    protected $description = 'Add Account Status Detail';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = $this->arguments();
        unset($data['command']);
        $row = new Detail();
        $row->forceFill($data);
        $row->save();
        $this->info('Detail ' . $row->status_id . '.' . $row->id . ': ' . $row->name . ' added successfully');
    }
}
