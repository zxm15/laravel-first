<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	//
    protected $fillable = [
        //'users_id',
        //'articles_id',
        'comment',
        'like',
        'published_time'
    ];

}
