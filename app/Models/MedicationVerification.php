<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicationVerification extends Model
{
    use HasFactory;    
    use SoftDeletes;
    
    public $table = 'medication_verifications';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
        'encounter_id',
        'medication_id',
        'verified',
        'discontinued'
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
    public function medication()
    {
        return $this->belongsTo('App\Models\Medication');
    }    
    /**
     * Get the post that owns the comment.
     */
    public function encounter()
    {
        return $this->belongsTo('App\Models\Encounter');
    }
}
