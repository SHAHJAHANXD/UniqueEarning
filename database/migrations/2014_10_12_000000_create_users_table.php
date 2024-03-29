<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->string('number')->nullable();
            $table->string('city')->nullable();
            $table->string('reference')->nullable();
            $table->string('refer')->nullable();
            $table->string('password');
            $table->string('ref')->default(0)->nullable();
            $table->string('ref1')->default(0)->nullable();
            $table->string('user_status')->default(1);
            $table->unsignedInteger('referred_by')->nullable();
            $table->unsignedInteger('total_amount')->nullable();
            $table->unsignedInteger('withdraw_amount')->nullable();
            $table->unsignedInteger('amount')->nullable();
            $table->string('statuss')->default(0);
            $table->string('status')->default(1);
            $table->string('stats')->default(1);
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
        Schema::dropIfExists('users');
    }
}
