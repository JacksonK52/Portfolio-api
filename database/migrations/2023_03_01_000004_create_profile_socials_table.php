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
        Schema::create('profile_socials', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('social_id');
            $table->softDeletes();
            $table->timestamps();
            // Foreign Key
            $table->index(['profile_id', 'social_id']);
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('social_id')->references('id')->on('socials')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_socials');
    }
};
