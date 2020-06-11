<?php
namespace Isb\Account;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Isb\DbCommon\Model\HasMultiplePrimary;

abstract class ResourceAbstract extends Model
{
    use SoftDeletes, HasMultiplePrimary {
        HasMultiplePrimary::performDeleteOnModel insteadof SoftDeletes;
        HasMultiplePrimary::runSoftDelete insteadof SoftDeletes;
    }

    protected $primaryKey = ['account_id', 'sort', 'type_id', 'deleted_at'];

    public $incrementing = false;
}
