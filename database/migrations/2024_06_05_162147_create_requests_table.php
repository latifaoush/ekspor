<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->integer('quantity');
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
