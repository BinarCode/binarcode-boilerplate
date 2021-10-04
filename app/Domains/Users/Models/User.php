<?php

namespace App\Domains\Users\Models;

use Binaryk\LaravelRestify\Contracts\Sanctumable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 *
 * @package App\Domains\Users\Models
 */
class User extends Authenticatable implements Sanctumable
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
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
}
