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
    public function physician_notes()
    {
        return $this->hasMany(\App\Models\PhysicianNote::class, 'department_id');
    }
    /**
     * @return HasMany
     **/
    public function medications()
    {
        return $this->hasMany(\App\Models\Medication::class, 'department_id');
    }

    /**
     * @return HasMany
     **/
    public function nursing_notes()
    {
        return $this->hasMany(\App\Models\NursingNote::class, 'department_id');
    }
}
