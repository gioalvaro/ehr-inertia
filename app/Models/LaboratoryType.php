<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoryType extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'laboratory_types';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
        'code',
        'description',
        'verification'
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
    public function laboratories()
    {
        return $this->hasMany(\App\Models\Laboratory::class, 'laboratory_type_id');
    }

}
