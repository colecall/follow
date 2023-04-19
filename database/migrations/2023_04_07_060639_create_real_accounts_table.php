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
        Schema::create('real_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('username');
            $table->integer('counter');
            $table->enum('category', ['Follow Instagram Account', 'Like Instagram Post', 'Follow Tiktok Account', 'Like Tiktok Video', 'Subscribe Youtube Chanel', 'Likes Youtube Video', 'Comment Instagram Post', 'Comment Youtube Video', 'Comment Tiktok Video']);
            $table->enum('status', ['active', 'inactive']);
            // $table->integer('target'); // target - berapa target yang dia inginkan SOON
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_accounts');
    }
};
