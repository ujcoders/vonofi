<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHcpsTable extends Migration
{
    public function up()
    {
        Schema::create('hcps', function (Blueprint $table) {
            $table->id();
            $table->string('hcp_name');
            $table->string('hcp_city');
            $table->string('hcp_qualification')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hcps');
    }
}

