<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ClientStatusEnum;
use App\Enums\ProfileOpenForWorkEnum;

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
            $table->unsignedBigInteger('native_language_id')->nullable();
            $table->enum('open_for_work', [
                ProfileOpenForWorkEnum::NO->value,
                ProfileOpenForWorkEnum::YES->value,
            ])->default(ProfileOpenForWorkEnum::YES->value);
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->enum('status', [
                ClientStatusEnum::INACTIVE->value,
                ClientStatusEnum::ACTIVE->value,
            ])->default(ClientStatusEnum::ACTIVE->value);
            $table->timestamps();
            // Foreign Key
            $table->index(['native_language_id', 'updated_by', 'created_by']);
            $table->foreign('native_language_id')->references('id')->on('languages');
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
