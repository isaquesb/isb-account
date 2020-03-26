<?php
namespace Isb\Account\Email;

use Isb\Account\ResourceAbstract;

class Email extends ResourceAbstract
{
    protected $table = 'account_email';

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at'];

    protected $guarded = [];
}
