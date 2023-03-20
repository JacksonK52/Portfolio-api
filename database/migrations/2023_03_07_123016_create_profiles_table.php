<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ClientStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->text('introduction')->nullable();
            $table->unsignedBigInteger('skills_id')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->unsignedBigInteger('native_language_id')->nullable();
            $table->unsignedBigInteger('hobby_id')->nullable();
            // People will sent mail to this email
            $table->string('point_of_contact_email')->nullable();
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->enum('status', [
                ClientStatusEnum::INACTIVE->value,
                ClientStatusEnum::ACTIVE->value,
            ])->default(ClientStatusEnum::ACTIVE->value);
            $table->timestamps();
            // Foreign Key
            $table->index(['skills_id', 'language_id', 'native_language_id', 'hobby_id', 'updated_by', 'created_by']);
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('native_language_id')->references('id')->on('languages');
            $table->foreign('hobby_id')->references('id')->on('hobbies');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
