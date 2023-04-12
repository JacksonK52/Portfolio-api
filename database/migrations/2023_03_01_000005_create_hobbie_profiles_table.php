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
        Schema::create('hobbie_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('hobbie_id');
            $table->unsignedBigInteger('profile_id');
            $table->softDeletes();
            $table->timestamps();
            // Foreign Key
            $table->index(['hobbie_id', 'profile_id']);
            $table->foreign('hobbie_id')->references('id')->on('hobbies')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobbie_profiles');
    }
};
