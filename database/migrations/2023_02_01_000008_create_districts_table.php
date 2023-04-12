<?php

use App\Enums\StatusEnum;
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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->unsignedBigInteger('state_id');
            $table->string('name', 255);
            $table->enum('status', [
                StatusEnum::INACTIVE->value,
                StatusEnum::ACTIVE->value,
            ])->default(StatusEnum::ACTIVE->value);
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->timestamps();
            // FOREIGN Key
            $table->index(['state_id', 'updated_by', 'created_by']);
            $table->foreign('state_id')->references('id')->on('states')->onDelete('RESTRICT')->onUpdate('CASCADE');
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
        Schema::dropIfExists('districts');
    }
};
