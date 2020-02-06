<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
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
      'portfolio_tag_id',
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

    public function portfolioTag()
    {
        return $this->belongsTo('App\PortfolioTag');
    }

    public function stacks()
    {
        return $this->belongsToMany('App\Stack');
    }

    public $imageDirectory = '/portfolio//';

    public function getImageDirectory($value){
      return $this->imageDirectory . $value;
    }
}
