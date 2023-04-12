<?php

use App\Enums\StatusEnum;
use App\Enums\ExperienceStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Enums\ExperiencePresentlyWorkingEnum;
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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('name', 255);
            $table->unsignedBigInteger('position_id');
            $table->text('roles')->nullable();
            $table->string('link', 255)->nullable();                    // Company Site Link
            $table->enum('presently_working', [
                ExperiencePresentlyWorkingEnum::NO->value,
                ExperiencePresentlyWorkingEnum::YES->value,
            ])->default(ExperiencePresentlyWorkingEnum::NO->value);
            $table->date('joining_date');
            $table->date('relieving_date');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->enum('status', [
                StatusEnum::INACTIVE->value,
                StatusEnum::ACTIVE->value,
            ])->default(StatusEnum::ACTIVE->value);
            $table->timestamps();
            // FOREIGN Key
            $table->index(['position_id', 'state_id', 'district_id', 'updated_by', 'created_by']);
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('RESTRICT')->onUpdate('CASCADE');
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
        Schema::dropIfExists('experiences');
    }
};
