<?php
namespace Isb\Account\Console\Commands;

use Illuminate\Console\Command;
use Isb\Account\Status\StatusLang;

class AddStatusLangCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'isb-account:add-status-lang
                            {status_id : Status ID}
                            {language_id : Status Lang}
                            {name : Status Name}
                            {description : Status Description}';
    /**
     * @var string
     */
    protected $description = 'Add Account Status Lang';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = $this->arguments();
        unset($data['command']);
        $row = new StatusLang();
        $row->forceFill($data);
        $row->save();
        $this->info('Status Lang ' . $row->language_id . ' - ' . $row->name . ' added successfully');
    }
}
