<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'address',
        'occupation',
        'gender',
        'age',
        'password',
        'p_no1',
        'serv_prov_for_pno1',
        'p_no2',
        'serv_prov_for_pno2',
        'p_no3',
        'serv_prov_for_pno3',
        'mnos_monitored',
        'bank_acc1',
        'bank_for_acc1',
        'bank_acc2',
        'bank_for_acc2',
        'bank_acc3',
        'bank_for_acc3',
        'accs_monitored',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
