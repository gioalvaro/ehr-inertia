<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoryGroup extends Model
{
    use HasFactory;    
    use SoftDeletes;
    public $table = 'laboratory_groups';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
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
    public function laboratory_types()
    {
        return $this->hasMany(\App\Models\LaboratoryType::class, 'laboratory_group_id');
    }
}
