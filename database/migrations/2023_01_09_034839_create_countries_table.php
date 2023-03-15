<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parent_id')->nullable(); // the id which u want to connect in this table
            $table->integer('level'); // ( country=1 , city=2 and state=3 )
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('note')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('hide_show')->default(1); // 1 is show
            $table->integer('reg_id');
            $table->integer('upd_id')->nullable();
            $table->string('token');
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
        Schema::dropIfExists('countries');
    }
};
