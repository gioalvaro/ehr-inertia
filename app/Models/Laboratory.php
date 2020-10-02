<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Laboratory extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'laboratories';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'patient_id',        
        'laboratory_type_id',
        'provider_id',
        'current_value',
        'min',
        'max'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the post that owns the comment.
     */
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
    /**
     * Get the post that owns the comment.
     */
    public function laboratory_type()
    {
        return $this->belongsTo('App\Models\LaboratoryType');
    }    
    /**
     * Get the post that owns the comment.
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
