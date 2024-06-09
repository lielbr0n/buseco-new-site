<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('post_author_id');
            $table->string('post_author_name');
            $table->string('post_title');
            $table->text('post_content');
            $table->string('post_slug')->unique();
            $table->string('post_excerpt')->nullable();
            $table->string('post_category');
            $table->string('post_tags')->nullable();
            $table->string('post_status');
            $table->string('post_template');
            $table->string('post_option')->nullable();
            $table->dateTime('post_schedule_date_start')->nullable();
            $table->dateTime('post_schedule_date_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('post');
    }
};
