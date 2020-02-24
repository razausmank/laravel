<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [] ;

    public function profileImage(){
        return ($this->image) ? '/storage/'. $this->image : 'https://instagram.fkhi16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fkhi16-1.fna.fbcdn.net&_nc_ohc=p6VKJ2zZwx8AX9xzYmQ&oh=b663b2cf8ce3891eafe1eaf9d1602786&oe=5E8CD1BA' ;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
