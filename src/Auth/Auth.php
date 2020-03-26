<?php
namespace Isb\Account\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Isb\Account\Account;

class Auth extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'account_auth';

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'last_login', 'last_activity'];

    protected $guarded = [
        'account_id',
        'username',
        'password',
    ];

    protected $casts = [
        'active' => 'boolean',
        'change_password' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
