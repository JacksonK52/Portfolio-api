<?php

use App\Enums\StatusEnum;
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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // Point of Contact
            $table->string('primary_email', 255);
            $table->string('alternative_email', 255)->nullable();
            $table->string('primary_mobile', 15);
            $table->string('alternative_mobile', 15)->nullable();
            $table->unsignedBigInteger('address_id');
            $table->enum('status', [
                StatusEnum::INACTIVE->value,
                StatusEnum::ACTIVE->value,
            ])->default(StatusEnum::ACTIVE->value);
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('contacts');
    }
};
