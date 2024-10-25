<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomUser extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'custom_users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'user_id');
    }
}
