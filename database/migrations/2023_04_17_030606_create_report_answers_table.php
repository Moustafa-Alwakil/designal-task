<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('report_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id');
            $table->foreignId('employee_id');
            $table->string('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('report_answers');
    }
};
