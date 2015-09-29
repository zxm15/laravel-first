<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model {

    protected $fillable = [
        'name',
    ];

    /**
     * Get the articles assocaciated with each tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles() {
        return $this->belongsToMany('App\Articles')->withTimestamps();
    }

}
