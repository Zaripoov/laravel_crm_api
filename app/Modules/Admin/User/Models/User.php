<?php

namespace App\Modules\Admin\User\Models;

use App\Modules\Admin\Lead\Models\Traits\UserLeadsTrait;
use App\Modules\Admin\Role\Models\Traits\UserRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Passport\HasApiTokens;

class User extends AuthUser
{
    use HasFactory, HasApiTokens, UserRoles, UserLeadsTrait;

    //Разрешено для заполнения
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'status',
    ];

    //Не должны показыватся
    protected $hidden = [
        'password'
    ];


}
