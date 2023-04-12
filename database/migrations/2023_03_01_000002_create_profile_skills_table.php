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
        Schema::create('profile_skills', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('skill_id');
            $table->softDeletes();
            $table->timestamps();
            // Foreign Key
            $table->index(['profile_id', 'skill_id']);
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_skills');
    }
};
