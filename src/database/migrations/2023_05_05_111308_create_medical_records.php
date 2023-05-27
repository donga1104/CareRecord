<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->bigInteger('user_id')->unsigned()->nullable(false)->unique();
            $table->string('hospital_id')->nullable(false)->unique();
            $table->string('target_id')->nullable(false)->unique();
            $table->unsignedInteger('ymd')->nullable(false)->limit(8);
            $table->text('record');

            $table->timestamps(); // created_at、updated_atカラム追加
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
