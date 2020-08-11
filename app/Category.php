<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        //ini kode misalnya kita tidak mendefinisikan dengan nama category_id pada tabel Post 
        // return $this->hasMany(Post::class,'subject');

        //namun jika kita memberi nama Category_id. insyallah laravel sudah otomatis mengetahui relasinya
        return $this->hasMany(Post::class);
    }
}
