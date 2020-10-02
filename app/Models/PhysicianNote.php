<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhysicianNote extends Model
{
    use HasFactory;
    use SoftDeletes;


    public $table = 'physician_notes';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'patient_id',
        'department_id',
        'physician_type_id',
        'provider_id',
        'note'
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
    public function physician_type()
    {
        return $this->belongsTo('App\Models\PhysicianType');
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
