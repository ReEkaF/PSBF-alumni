<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SosialMedia
 *
 * @property $id_sosmed
 * @property $nim
 * @property $nama_akun_sosmed
 * @property $jenis_sosmed
 *
 * @property Lulusan $lulusan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SosialMedia extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey='id_sosmed';
    protected $table = 'sosial_media';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nim', 'nama_akun_sosmed', 'jenis_sosmed'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lulusan()
    {
        return $this->belongsTo(\App\Models\Lulusan::class, 'nim', 'nim');
    }
    
}
