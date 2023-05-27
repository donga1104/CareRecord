<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalMasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_masters', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->bigInteger('user_id')->unsigned()->unique()->nullable(false);
            $table->string('hospital_name')->unique();
            $table->string('address')->nullable(true);
            $table->string('tel')->nullable(true);
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
        Schema::dropIfExists('hospital_masters');
    }
}
