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
            $table->foreignId('role_id');
            $table->foreign('communication_id')
            ->references('id')
            ->on('communications')
            ->cascadeOnDelete();
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
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
