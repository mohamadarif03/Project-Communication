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
        Schema::create('communications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('communication_type_id');
            $table->foreignId('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();
            $table->foreign('communication_type_id')
            ->references('id')
            ->on('communication_types');
            $table->date('date');
            $table->string('to');
            $table->longText('message');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('communications');
    }
};
