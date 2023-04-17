<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('report_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id');
            $table->string('question');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('report_questions');
    }
};
