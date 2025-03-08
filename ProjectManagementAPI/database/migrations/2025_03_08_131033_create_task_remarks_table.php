<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskRemarksTable extends Migration
{
    public function up()
    {
        Schema::create('task_remarks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained()->onDelete('cascade');
            $table->text('remark');
            $table->date('date'); // Store daily remarks
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_remarks');
    }
}
