<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'url',
        'image_filename',
        'certification_tag_id',
        'created_user_id',
        'updated_user_id',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'email_verified_at',
    ];

    public $imageDirectory = '/certification//';

    public function getImageDirectory($value){
      return $this->imageDirectory . $value;
    }

    public function certificationTag()
    {
        return $this->belongsTo('App\CertificationTag');
    }
}
