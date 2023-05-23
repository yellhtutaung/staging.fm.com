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
        Schema::table('users', function (Blueprint $table) {
            $table->string('shop_name')->nullable()->after('name');
            $table->text('address')->nullable();
            $table->text('shop_address')->nullable();
            $table->integer('country_id')->nullable()->after('email_verified_at');
            $table->integer('city_id')->nullable()->after('country_id');
            $table->string('postal_code')->nullable()->after('password');
            $table->string('zip_code')->nullable()->after('postal_code');
            $table->string('profile')->nullable()->after('zip_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
