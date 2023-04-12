<?php

use App\Enums\StatusEnum;
use App\Enums\AddressStatusEnum;
use App\Enums\AddressPermanentEnum;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            // Permanent Address
            $table->text('permanent_address_line_one');
            $table->text('permanent_address_line_two')->nullable();
            $table->string('permanent_landmark', 255);
            $table->unsignedBigInteger('permanent_state_id');
            $table->unsignedBigInteger('permanent_district_id');
            $table->integer('permanent_pincode', 7);
            // Present Address
            $table->text('present_address_line_one');
            $table->text('present_address_line_two')->nullable();
            $table->string('present_landmark', 255);
            $table->unsignedBigInteger('present_state_id');
            $table->unsignedBigInteger('present_district_id');
            $table->integer('present_pincode', 7);
            $table->enum('same_as_permanent', [
                AddressPermanentEnum::NOT_SAME->value,
                AddressPermanentEnum::SAME->value,
            ])->default(AddressPermanentEnum::SAME->value,);
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
        Schema::dropIfExists('addresses');
    }
};
