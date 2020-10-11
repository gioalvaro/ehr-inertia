<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imaging extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = 'imagings';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'summary',        
        'type',
        'encounter_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:m-d-Y h:m'
    ];
    
    protected $dates = ['deleted_at'];


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
    public function imaging_items()
    {
        return $this->hasMany(\App\Models\ImagingItem::class, 'imaging_id');
    }
}
