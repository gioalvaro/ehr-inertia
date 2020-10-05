<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Department extends Model
{    
    use SoftDeletes;
    use HasFactory;
    public $table = 'departments';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'code',
        'description'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'integer',
        'description' => 'string'
    ];
    
    protected $dates = ['deleted_at'];


    /**
     * @return HasMany
     **/
    public function encounters()
    {
        return $this->hasMany(\App\Models\Encounter::class, 'encounter_id');
    }
}
