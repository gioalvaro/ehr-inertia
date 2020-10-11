<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagingItem extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = 'imaging_items';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'observation',        
        'image_url',
        'imaging_id'
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
    public function imaging()
    {
        return $this->belongsTo('App\Models\Imaging');
    }
}
