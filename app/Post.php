<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    // use SluggableTrait;  implements SluggableInterface
 
    // protected $sluggable = [
    //     'build_from' => 'title',
    //     'save_to'    => 'slug',
    //     'on_update'  => true,
    // ];

    use Sluggable;

    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
    	
    	'user_id',
    	'category_id',
    	'photo_id',
    	'title',
    	'body'

    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function photo(){
    	return $this->belongsTo('App\Photo');
    }
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function placeholder(){
        return 'http://placehold.it/700x200';
    }
}
