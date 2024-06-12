<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Lulusan
 *
 * @property $username
 * @property $Nama
 * @property $tanggal_lahir
 * @property $Alamat
 * @property $jenis_kelamin
 * @property $ipk
 * @property $tahun_masuk
 * @property $tahun_lulus
 * @property $prodi
 * @property $no_hp
 * @property $email
 * @property $prestasi
 * @property $pengalaman
 *
 * @property Pekerjaan[] $pekerjaans
 * @property Postingan[] $postingans
 * @property SosialMedia[] $sosialMedia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lulusan extends Authenticatable
{
    
    protected $perPage = 20;
    protected $primaryKey='username';
    protected $table = 'lulusan';
    protected $casts = [
        'password' => 'hashed',
    ];

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['username','password', 'Nama', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'ipk', 'tahun_masuk', 'tahun_lulus', 'prodi', 'no_hp', 'email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pekerjaan()
    {
        return $this->hasMany(\App\Models\Pekerjaan::class, 'username', 'username');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postingan()
    {
        return $this->hasMany(\App\Models\Postingan::class, 'username', 'username');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sosialMedia()
    {
        return $this->hasMany(\App\Models\SosialMedia::class, 'username', 'username');
    }
    
}
