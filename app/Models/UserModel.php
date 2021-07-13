<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    protected $table = 'users';
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phoneNumber',
        'birthday',
        'address',
        'avatar',
        'coverPhoto'
        ];
    public function articles(){
        return $this->hasMany(articlemodel::class);
    }
}
