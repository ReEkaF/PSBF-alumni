<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pekerjaan
 *
 * @property $id_pekerjaan
 * @property $nim
 * @property $perusahaan
 * @property $nama_pekerjaan
 * @property $alamat_perusahaan
 * @property $deskripsi_pekerjaan
 * @property $mulai_bekerja
 * @property $selesai_bekeja
 *
 * @property Lulusan $lulusan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pekerjaan extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_pekerjaan', 'nim', 'perusahaan', 'nama_pekerjaan', 'alamat_perusahaan', 'deskripsi_pekerjaan', 'mulai_bekerja', 'selesai_bekeja'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lulusan()
    {
        return $this->belongsTo(\App\Models\Lulusan::class, 'nim', 'nim');
    }
    
}
