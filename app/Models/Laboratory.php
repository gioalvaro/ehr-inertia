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
        'id',
        'encounter_id',        
        'laboratory_type_id',        
        'current_value',
        'min',
        'max',
        'units'
    ];

    protected $casts = [
        'created_at' => 'datetime:m-d-Y h:m'
    ];

    
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
    public function encounter()
    {
        return $this->belongsTo('App\Models\Encounter');
    }
}
