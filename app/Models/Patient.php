<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use HasProfilePhoto;
    use SoftDeletes;

    public $table = 'patients';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'mrn',
        'firstname',
        'lastname',
        'sex',
        'age',
        'reason',
        'day_of_birth',
        'scheduled_time',
        'arrival_time',
        'checkout',
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
        'photo_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mrn' => 'integer',
        'firstname' => 'integer',
        'lastname' => 'integer',
        'sex' => 'integer',
        'age' => 'integer',
        'reason' => 'string',
        'day_of_birth' => 'date',
        'scheduled_time' => 'datetime:d/m/Y',
        'arrival_time' => 'datetime:d/m/Y',
        'checkout' => 'boolean',
        'temperature' => 'float',
        'temperature_type' => 'string',
        'bmi' => 'float',
        'current_vitals' => 'datetime:d/m/Y',
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
        return $this->hasMany(\App\Models\PhysicianNote::class, 'patient_id');
    }

    /**
     * @return HasMany
     **/
    public function laboratories()
    {
        return $this->hasMany(\App\Models\Laboratory::class, 'patient_id');
    }

    /**
     * @return HasMany
     **/
    public function medications()
    {
        return $this->hasMany(\App\Models\Medication::class, 'patient_id');
    }

    /**
     * @return HasMany
     **/
    public function nursing_notes()
    {
        return $this->hasMany(\App\Models\NursingNote::class, 'patient_id');
    }
}
