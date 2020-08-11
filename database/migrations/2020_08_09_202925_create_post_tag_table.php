<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('tag_id')->constrained('tags');
            //membuat menjadi primary key. agar tidak terjadi duplicate
            $table->primary(['post_id','tag_id']);



            //membuat for and key . jadi seandainya post atau tag nya di hapus maka post_tag ini juga terhapus
            //  $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            // atau bisa diganti dengan cukup seperti ini
            //  $table->foreignId('post_id')->constrained('posts);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
