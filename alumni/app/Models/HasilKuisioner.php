<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HasilKuisioner
 *
 * @property $id_hasil_kuisioner
 * @property $nim
 * @property $id_kuisioner
 * @property $hasil_kuisioner1
 * @property $hasil_kuisioner2
 * @property $hasil_kuisioner3
 * @property $hasil_kuisioner4
 * @property $hasil_kuisioner5
 * @property $hasil_kuisioner6
 * @property $hasil_kuisioner7
 * @property $hasil_kuisioner8
 * @property $hasil_kuisioner9
 * @property $hasil_kuisioner10
 *
 * @property Kuisioner $kuisioner
 * @property Lulusan $lulusan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HasilKuisioner extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey='id_hasil_kuisioner';

    protected $table = 'hasil_kuisioner';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_hasil_kuisioner', 'username', 'id_kuisioner', 'hasil_kuisioner',];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kuisioner()
    {
        return $this->belongsTo(\App\Models\Kuisioner::class, 'id_kuisioner', 'id_kuisioner');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lulusan()
    {
        return $this->belongsTo(\App\Models\Lulusan::class, 'nim', 'nim');
    }
    
}
