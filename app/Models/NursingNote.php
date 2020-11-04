<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NursingNote extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'nursing_notes';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
        'created_at',
        'encounter_id',
        'nursing_type_id',
        'note'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:m-d-Y h:m'
    ];

    
    /**
     * Get the post that owns the comment.
     */
    public function nursing_type()
    {
        return $this->belongsTo('App\Models\NursingType');
    }    
    /**
     * Get the post that owns the comment.
     */
    public function encounter()
    {
        return $this->belongsTo('App\Models\Encounter');
    }
}
