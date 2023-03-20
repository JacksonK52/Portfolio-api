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
            $table->unsignedBigInteger('skills')->nullable();
            $table->unsignedBigInteger('language')->nullable();
            $table->bigInteger('hobby')->nullable();
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
