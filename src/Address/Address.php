<?php
namespace Isb\Account\Address;

use Isb\Account\ResourceAbstract;

class Address extends ResourceAbstract
{
    protected $table = 'account_address';

    protected $guarded = [];

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at'];
}
