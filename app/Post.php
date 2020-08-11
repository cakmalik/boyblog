<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','body'];
    
    public function category()
    {
        //ini kode misalnya kita tidak mendefinisikan dengan nama category_id pada tabel Post 
        // return $this->belongsTo(Category::class,'subject');

        //namun jika kita memberi nama Category_id. insyallah laravel sudah otomatis mengetahui relasinya
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
