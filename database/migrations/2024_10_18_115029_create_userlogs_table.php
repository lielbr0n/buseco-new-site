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
        Schema::create('user_post_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('username');
            $table->string('userEmail');
            $table->integer('postId');
            $table->text('postTitle');
            $table->text('modifiedFields')->nullable();
            $table->string('operation');
            $table->timestamp('date_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_post_logs');
    }
};
