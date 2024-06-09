<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'login_mahasiswa';
    protected $primaryKey = 'unsername';
    protected $perPage = 20;

    public $incrementing = false;

    protected $fillable = ['username', 'password'];
}
