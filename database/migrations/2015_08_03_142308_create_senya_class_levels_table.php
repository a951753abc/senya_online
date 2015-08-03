<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenyaClassLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senya_class_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->comment = "對應級別key";
            $table->tinyInteger('class_level')->comment = "等級";
            $table->tinyInteger('class_level_fight')->comment = "近戰";
            $table->tinyInteger('class_level_distant')->comment = "射擊";
            $table->tinyInteger('class_level_mind')->comment = "精神";
            $table->tinyInteger('class_level_act')->comment = "行動";
            $table->integer('class_level_hp')->comment = "生命力";
            $table->integer('class_level_tp')->comment = "集中力";
            $table->tinyInteger('class_level_def')->comment = "防禦";
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
        Schema::drop('senya_class_levels');
    }
}
