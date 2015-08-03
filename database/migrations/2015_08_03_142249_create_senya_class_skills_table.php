<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenyaClassSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senya_class_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->comment = "對應級別key";
            $table->tinyInteger('class_skill_type')->comment = "一般特技或是額外特技";
            $table->string('class_skill_name')->comment = "技能名稱";
            $table->tinyInteger('class_skill_category')->comment = "技能分類";
            $table->string('class_skill_cost_define')->comment = "技能代價";
            $table->tinyInteger('class_skill_bonus')->comment = "情緒獎勵";
            $table->string('class_skill_limit_define')->comment = "技能限制";
            $table->string('class_skill_define')->comment = "技能內文敘述";
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
        Schema::drop('senya_class_skills');
    }
}
