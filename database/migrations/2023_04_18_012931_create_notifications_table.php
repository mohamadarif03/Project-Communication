<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();
            $table->foreignId('responsbility_id')->nullable();
            $table->foreign('responsbility_id')
            ->references('id')
            ->on('responsbilities')
            ->cascadeOnDelete();
            $table->foreignId('communication_id')->nullable();
            $table->foreign('communication_id')
            ->references('id')
            ->on('communications')
            ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
