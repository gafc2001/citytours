<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destino
 *
 * @property $id
 * @property $name
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @property Subdestino[] $subdestinos
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Destino extends Model
{
    
    static $rules = [
		'name' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subdestinos()
    {
        return $this->hasMany('App\Models\Subdestino', 'id_destination', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_destination', 'id');
    }
    

}
