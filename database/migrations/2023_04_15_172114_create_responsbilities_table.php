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
        Schema::create('responsbilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rule_id');
            $table->foreign('rule_id')
            ->references('id')
            ->on('rules')
            ->cascadeOnDelete();
            $table->foreignId('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();
            $table->date('date');
            $table->longText('file')->nullable();
            $table->longText('link')->nullable();
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
        Schema::dropIfExists('responsbilities');
    }
};
