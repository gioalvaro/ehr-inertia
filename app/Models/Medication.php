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
        'id',
        'encounter_id',
        'medication_type_id',
        'name',
        'units',
        'dose',
        'route',
        'frequency',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'created_at' => 'datetime:m-d-Y h:m'
    ];

    
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
    public function encounter()
    {
        return $this->belongsTo('App\Models\Encounter');
    }

    /**
     * @return HasMany
     **/
    public function medication_verifications()
    {
        return $this->hasMany(\App\Models\MedicationVerification::class, 'medication_id');
    }


}
