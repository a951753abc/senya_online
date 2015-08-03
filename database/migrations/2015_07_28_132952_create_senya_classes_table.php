<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenyaClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senya_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_version')->comment = "版本";
            $table->tinyInteger('class_name')->comment = "級別名稱編號";
            $table->text('class_define')->comment = "級別解說";
            $table->tinyInteger('class_str');
            $table->tinyInteger('class_con');
            $table->tinyInteger('class_int');
            $table->tinyInteger('class_will');
            $table->text('class_skill_define')->comment = "初期技能取得與升級解說";
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
        Schema::drop('senya_classes');
    }
}
