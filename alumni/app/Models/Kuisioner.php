<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kuisioner
 *
 * @property $id_kuisioner
 * @property $kuisioner1
 * @property $kuisioner2
 * @property $kuisioner3
 * @property $kuisioner4
 * @property $kuisioner5
 * @property $kuisioner6
 * @property $kuisioner7
 * @property $kuisioner8
 * @property $kuisioner9
 * @property $kuisioner10
 *
 * @property HasilKuisioner[] $hasilKuisioners
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Kuisioner extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey='id_kuisioner';

    protected $table = 'kuisioner';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['kuisioner'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasilKuisioners()
    {
        return $this->hasMany(\App\Models\HasilKuisioner::class, 'id_kuisioner', 'id_kuisioner');
    }
    
}
