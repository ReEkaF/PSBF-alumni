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
    protected $fillable = ['id_kuisioner', 'kuisioner1', 'kuisioner2', 'kuisioner3', 'kuisioner4', 'kuisioner5', 'kuisioner6', 'kuisioner7', 'kuisioner8', 'kuisioner9', 'kuisioner10'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasilKuisioners()
    {
        return $this->hasMany(\App\Models\HasilKuisioner::class, 'id_kuisioner', 'id_kuisioner');
    }
    
}
