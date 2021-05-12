<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 *
 * @property $id
 * @property $tour
 * @property $details
 * @property $imagen
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tour extends Model
{
    
    static $rules = [
		'tour' => 'required',
		'details' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tour','details','imagen'];



}
