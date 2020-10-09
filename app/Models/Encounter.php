<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encounter extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'encounters';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
        'reason',
        'scheduled_time',
        'arrival_time',
        'check',
        'temperature',
        'temperature_type',
        'bmi',
        'current_vitals',
        'allergie',
        'allergie_check',
        'ga',
        'lmp',
        'edd',
        'gptal',
        'patient_id',
        'provider_id',
        'department_id',
        'test'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reason' => 'string',
        'scheduled_time' => 'datetime:m-d-Y h:m',
        'arrival_time' => 'datetime:m-d-Y h:m',
        'check' => 'boolean',
        'temperature' => 'float',
        'temperature_type' => 'string',
        'bmi' => 'float',
        'current_vitals' => 'string',
        'allergie' => 'string',
        'allergie_check' => 'boolean',
        'ga' => 'integer',
        'lmp' => 'integer',
        'edd' => 'integer',
        'gptal' => 'integer'
    ];

    protected $dates = [
        'day_of_birth'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    /**
     * @return HasMany
     **/
    public function physician_notes()
    {
        return $this->hasMany(\App\Models\PhysicianNote::class, 'encounter_id');
    }

    /**
     * @return BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }
    /**
     * @return BelongsTo
     **/
    public function provider()
    {
        return $this->belongsTo(\App\Models\Provider::class);
    }

     /**
     * @return BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }

    /**
     * @return HasMany
     **/
    public function laboratories()
    {
        return $this->hasMany(\App\Models\Laboratory::class, 'encounter_id');
    }

    /**
     * @return HasMany
     **/
    public function medications()
    {
        return $this->hasMany(\App\Models\Medication::class, 'encounter_id');
    }

    /**
     * @return HasMany
     **/
    public function medication_verications()
    {
        return $this->hasMany(\App\Models\MedicationVerification::class, 'encounter_id');
    }


    /**
     * @return HasMany
     **/
    public function nursing_notes()
    {
        return $this->hasMany(\App\Models\NursingNote::class, 'encounter_id');
    }
}
