<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'image', 'category_id'];
    

    public function author()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getImageUrlAttribute($value)
    {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/img/post/" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('img/post/'. $this->image);
		}

		return $imageUrl;

    }

    public function getImageThumbAttribute()
	  {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/img/post/thumb_" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('img/post/thumb_'. $this->image);
		}

		return $imageUrl;
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function getTanggalAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d');
    }

    public function getBulanAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('M');
    }
}
