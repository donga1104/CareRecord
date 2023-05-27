<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetMasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_masters', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->bigInteger('user_id')->unsigned()->nullable(false)->unique();
            $table->string('target_name_kana')->nullable(false);
            $table->string('target_name')->nullable(true);
            $table->string('target_name_alphabet')->nullable(true);
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
        Schema::dropIfExists('target_masters');
    }
}
