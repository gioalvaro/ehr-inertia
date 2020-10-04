<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory;
    use SoftDeletes;


    public $table = 'providers';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'firstname',
        'lastname',
        'title',
        'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'firstname' => 'string',
        'lastname' => 'string',
        'title' => 'string',
    ];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'name',
    ];
    public function getNameAttribute() 
    {  
      return $this->title . ' ' . $this->lastname;  
    }

     /**
     * @return HasMany
     **/
    public function physician_notes()
    {
        return $this->hasMany(\App\Models\PhysicianNote::class, 'provider_id');
    }
    /**
     * @return HasMany
     **/
    public function laboratories()
    {
        return $this->hasMany(\App\Models\Laboratory::class, 'provider_id');
    }

    /**
     * @return HasMany
     **/
    public function medications()
    {
        return $this->hasMany(\App\Models\Medication::class, 'provider_id');
    }

    /**
     * @return HasMany
     **/
    public function nursing_notes()
    {
        return $this->hasMany(\App\Models\NursingNote::class, 'provider_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
