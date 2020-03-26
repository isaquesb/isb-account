<?php
namespace Isb\Account;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    const ACCOUNT_SYSTEM = -500;
    const ACCOUNT_ADMIN = -100;
    const ACCOUNT_USER = 10000;
    const ACCOUNT_MANAGER = 5000;
    const ACCOUNT_COMPANY = 1000;
    const ACCOUNT_COMPANY_SUB = 900;

    const PERSONAL = 10;
    const CELLPHONE = 11;
    const COMMERCIAL = 20;
    const TECHNOLOGICAL  = 30;
    const BILLING = 40;
    const DELIVERY = 50;

    const DOC_STATE = 60;
    const DOC_UNIQUE = 80;
    const DOC_COMPANY = 90;

    protected $table = 'account_type';

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at'];
}
