<?php
namespace Isb\Account;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Isb\Account\Address\Address;
use Isb\Account\Auth\Auth;
use Isb\Account\Document\Document;
use Isb\Account\Email\Email;
use Isb\Account\Phone\Phone;
use Isb\Account\Status\Status;
use Isb\DbCommon\Model\HasParent;

class Account extends Model
{
    use SoftDeletes, HasParent;

    protected $table = 'account';

    protected $guarded = [
        'parent_id',
        'status_id',
        'status_detail_id',
    ];

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function auths()
    {
        return $this->hasMany(Auth::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docs()
    {
        return $this->hasMany(Document::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
