<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->decimal('chinese', 4, 1)->comment('语文成绩');
            $table->decimal('math', 4, 1)->comment('数学成绩');
            $table->decimal('english', 4, 1)->comment('英语成绩');
            $table->decimal('count', 4, 1)->comment('总成绩');
            $table->softDeletes();
            $table->timestamps();
            // 当 student_id 对应的 student 表数据被删除时，删除其成绩
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
