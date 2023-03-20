<?php

use App\Enums\QualificationStatusEnum;
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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('institude_name', 255);          
            $table->string('institude_location', 255);      
            $table->unsignedBigInteger('standard_id');              
            $table->string('degree_name')->nullable();      
            $table->unsignedBigInteger('result_type_id');           
            $table->decimal('mark_obtain', 12, 2);          
            $table->decimal('out_of', 12, 2)->nullable();      
            $table->date('completion_date');                
            $table->tinyInteger('is_highlighted')->default(0);  // 0 - No | 1 - Yes
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_by');
            $table->softDeletes();
            $table->enum('status', [
                QualificationStatusEnum::INACTIVE->value,
                QualificationStatusEnum::ACTIVE->value,
            ])->default(QualificationStatusEnum::ACTIVE->value);
            $table->timestamps();
            // Foreign Key
            $table->index(['standard_id', 'result_type_id', 'updated_by', 'created_by']);
            $table->foreign('standard_id')->references('id')->on('standards');
            $table->foreign('result_type_id')->references('id')->on('result_types');
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
        Schema::dropIfExists('qualifications');
    }
};
