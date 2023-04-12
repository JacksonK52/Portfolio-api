<?php

use App\Enums\StatusEnum;
use App\Enums\ClientStatusEnum;
use App\Enums\ProfileOpenForWorkEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
                StatusEnum::INACTIVE->value,
                StatusEnum::ACTIVE->value,
            ])->default(StatusEnum::ACTIVE->value);
            $table->timestamps();
            // Foreign Key
            $table->index(['native_language_id', 'updated_by', 'created_by']);
            $table->foreign('native_language_id')->references('id')->on('languages')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
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
