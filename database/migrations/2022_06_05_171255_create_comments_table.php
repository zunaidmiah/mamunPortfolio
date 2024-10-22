<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('comments')){
            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('email', 255)->nullable();
                $table->string('comment', 255);
                $table->integer('rel_id');
                $table->string('type', 30);
                $table->integer('is_hidden')->default(0);
                $table->integer('is_deleted')->default(0);
                $table->integer('is_pending')->default(1);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
