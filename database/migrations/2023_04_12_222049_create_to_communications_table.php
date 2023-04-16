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
        Schema::create('to_communications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('communication_id');
            $table->foreignId('user_id');
            $table->foreign('communication_id')
            ->references('id')
            ->on('communications')
            ->cascadeOnDelete();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('to_communications');
    }
};
