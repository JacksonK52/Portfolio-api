<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StandardStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standards', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('name', 255);
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->enum('status', [
                StandardStatusEnum::INACTIVE->value,
                StandardStatusEnum::ACTIVE->value,
            ])->default(StandardStatusEnum::ACTIVE->value);
            $table->timestamps();
            // FOREIGN Key
            $table->index(['updated_by', 'created_by']);
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
        Schema::dropIfExists('standards');
    }
};
