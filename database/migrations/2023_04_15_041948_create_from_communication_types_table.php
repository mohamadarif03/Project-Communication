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
        Schema::create('from_communication_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('communication_type_id');
            $table->foreignId('role_id');
            $table->foreign('communication_type_id')
            ->references('id')
            ->on('communication_types')
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
        Schema::dropIfExists('from_communication_types');
    }
};
