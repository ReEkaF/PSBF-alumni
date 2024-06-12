<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Postingan
 *
 * @property $id_postingan
 * @property $username
 * @property $judul
 * @property $tanggal_posting
 * @property $gambar
 * @property $deskripsi
 *
 * @property Lulusan $lulusan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Postingan extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey='id_postingan';
    protected $table = 'postingan';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['username', 'judul', 'tanggal_posting', 'gambar', 'deskripsi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lulusan()
    {
        return $this->belongsTo(\App\Models\Lulusan::class, 'username', 'username');
    }
    
}
