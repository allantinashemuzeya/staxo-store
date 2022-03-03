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
        Schema::table('purchases', function (Blueprint $table) {
            //
            $table->string('cardHolder');
            $table->string('productId');
            $table->string('purchaseType')->default('guestPurchase');
            $table->unsignedBigInteger('userId')->default(0);
            $table->string('cardNumber');
            $table->string('cvv');
            $table->string('expMonth');
            $table->string('expYear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases_tables', function (Blueprint $table) {
            //
        });
    }
};
