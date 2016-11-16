<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title')->nullable();
            $table->text('content');

            $table->timestamps();

            $table->integer('story_id')->unsigned();
            $table->index('story_id');
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('parent_id')->unsigned();
            $table->index('parent_id');
            $table->foreign('parent_id')->references('id')->on('nodes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes');
    }
}
