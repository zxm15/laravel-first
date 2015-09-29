<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model {

	//
    protected $fillable = [

        'title',
        'body',
        'published_at',
        'user_id' //temp
    ];

    protected  $dates = ['published_at'];

    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query) {
        $query->where('published_at', '>', Carbon::now());
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tags')->withTimestamps();
    }

}
