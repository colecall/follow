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
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('fake_account_id');
            $table->unsignedBigInteger('real_account_id');
            $table->string('type');
            $table->enum('status', ['pending', 'confirmed','back'])->default('pending');
            $table->unsignedBigInteger('back_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('fake_account_id')
                ->references('id')
                ->on('fake_accounts')
                ->onDelete('cascade');

            $table->foreign('real_account_id')
                ->references('id')
                ->on('real_accounts')
                ->onDelete('cascade');

            $table->foreign('back_id')
                ->references('id')
                ->on('fake_accounts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
