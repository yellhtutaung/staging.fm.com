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
        Schema::create('price_list_transitions', function (Blueprint $table) {
            $table->id();
            $table->integer('f_id');
            $table->integer('price');
            $table->integer('depend_count');
            $table->string('unit');
            $table->integer('edit_id'); // who edit the record
            $table->integer('hide_show')->default(1); // 1 is show
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
        Schema::dropIfExists('price_list_transitions');
    }
};
