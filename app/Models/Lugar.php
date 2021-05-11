<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Lugar
 *
 * @property $id
 * @property $name
 * @property $details
 * @property $image
 * @property $precio
 * @property $created_at
 * @property $updated_at
 * @property $idsubdestination
 *
 * @property Subdestino $subdestino
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugar extends Model
{
    use HasFactory;
    static $rules = [
		'name' => 'required',
		'details' => 'required',
		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		'precio' => 'required|numeric|between:0,99.99',
    ];

    protected $perPage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','details','image','precio','idsubdestination'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subdestino()
    {
        return $this->hasOne('App\Models\Subdestino', 'id', 'idsubdestination');
    }
    

}
