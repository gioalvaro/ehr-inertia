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
        'id',
        'mrn',
        'firstname',
        'lastname',
        'sex',
        'age',        
        'day_of_birth',
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
        'firstname' => 'string',
        'lastname' => 'string',
        'sex' => 'string',
        'age' => 'integer',
        'day_of_birth' => 'date:m-d-Y'
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
    public function encounters()
    {
        return $this->hasMany(\App\Models\Encounter::class, 'patient_id');
    }
}
