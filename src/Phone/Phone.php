<?php
namespace Isb\Account\Phone;

use Isb\Account\ResourceAbstract;

class Phone extends ResourceAbstract
{
    protected $table = 'account_phone';

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at'];

    protected $guarded = [];
}
