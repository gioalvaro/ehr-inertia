<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $table = 'medications';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'patient_id',
        'department_id',
        'medication_type_id',
        'provider_id',
        'name',
        'dose',
        'route',
        'frequency',
        'start_date',
        'end_date',
        'verified'
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
    public function medication_type()
    {
        return $this->belongsTo('App\Models\MedicationType');
    }
    /**
     * Get the post that owns the comment.
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
    /**
     * Get the post that owns the comment.
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

}
