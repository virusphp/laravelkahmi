<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'is_activated','nik','jenis_kelamin','alamat', 'no_hp','tanggal_lahir','kota','pekerjaan','photo_diri','photo_ktp','photo_usaha','harapan','role'
    ];

	protected $username = 'username';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function getImageUrlAttribute($value)
    {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/img/photodiri/" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('img/post/'. $this->image);
		}

		return $imageUrl;

    }
}
