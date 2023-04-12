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
        Schema::create('to_rolus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rule_id');
            $table->foreign('rule_id')
            ->references('id')
            ->on('rules')
            ->cascadeOnDelete();
            $table->foreignId('role_id');
            $table->foreign('role_id')
            ->references('id')
            ->on('roles');
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
        Schema::dropIfExists('to_rolus');
    }
};
