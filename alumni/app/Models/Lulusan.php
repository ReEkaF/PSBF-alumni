<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lulusan
 *
 * @property $nim
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
class Lulusan extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey='nim';
    protected $table = 'lulusan';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nim','password', 'Nama', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'ipk', 'tahun_masuk', 'tahun_lulus', 'prodi', 'no_hp', 'email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pekerjaan()
    {
        return $this->hasMany(\App\Models\Pekerjaan::class, 'nim', 'nim');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postingan()
    {
        return $this->hasMany(\App\Models\Postingan::class, 'nim', 'nim');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sosialMedia()
    {
        return $this->hasMany(\App\Models\SosialMedia::class, 'nim', 'nim');
    }
    
}
