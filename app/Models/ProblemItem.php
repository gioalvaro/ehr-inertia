<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProblemItem extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'problem_items';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'id',
        'problem_id',
        'problem_type_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:m-d-Y h:m'
    ];
    
    protected $dates = ['deleted_at'];

     /**
     * Get the post that owns the comment.
     */
    public function problem_type()
    {
        return $this->belongsTo('App\Models\ProblemType');
    }
    /**
     * Get the post that owns the comment.
     */
    public function problem()
    {
        return $this->belongsTo('App\Models\Problem');
    }
}
