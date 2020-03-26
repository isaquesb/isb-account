<?php
namespace Isb\Account\Status;

use Illuminate\Database\Eloquent\Model;
use Isb\Language\LanguageTrait;

class Status extends Model
{
    const REGISTERED = -100;
    const REJECTED = 0;
    const APPROVED = 100;
    const INACTIVE = -500;
    const CANCELED = -1000;

    use LanguageTrait;

    protected $table = 'account_status';
}
