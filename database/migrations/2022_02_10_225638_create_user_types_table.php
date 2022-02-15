<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->default('Customer');
            $table->timestamps();
        });

        DB::table('user_types')->insert(
            array(
                'name' => 'Admin',
            )
        );

        DB::table('user_types')->insert(
            array(
                'name' => 'Customer',
            )
        );

        DB::table('user_types')->insert(
            array(
                'name' => 'Guest User',
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'Allan Muzeya',
                'email' => 'allan.thecodemaster@gmail.com',
                'userType' => 1,
                'password' => hash::make('Kungfucool24'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
};
