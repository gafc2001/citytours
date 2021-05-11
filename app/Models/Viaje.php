<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $time
 * @property $date
 * @property $created_at
 * @property $updated_at
 * @property $id_destination
 *
 * @property Boleta[] $boletas
 * @property Destino $destino
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    static $rules = [
		'time' => 'required|date_format:H:i',
		'date' => 'required|date_format:Y-m-d',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['time','date','id_destination'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletas()
    {
        return $this->hasMany('App\Models\Boleta', 'id_travel', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destino()
    {
        return $this->hasOne('App\Models\Destino', 'id', 'id_destination');
    }
    

}
