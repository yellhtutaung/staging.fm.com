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
        Schema::create('fruit_price_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_id');
            $table->integer('price');
            $table->string('images')->nullable();
            $table->text('depend_count')->nullable();
            $table->text('unit');
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->integer('reg_id');
            $table->integer('upd_id')->nullable();
            $table->integer('status')->default(1);
            $table->integer('hide_show')->default(1); // zero is hidden
            $table->string('token')->nullable();
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
        Schema::dropIfExists('fruit_price_lists');
    }
};
