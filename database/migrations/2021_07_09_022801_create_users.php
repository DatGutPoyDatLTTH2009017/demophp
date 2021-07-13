<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('password');
            $table->string('phoneNumber');
            $table->dateTime('birthday');
            $table->string('address');
            $table->text('avatar')->default('https://huyhoanhotel.com/wp-content/uploads/2016/05/765-default-avatar.png');
            $table->text('coverPhoto')->default('http://ss.jikoome.com/images/Default/default.jpg');
            $table->integer('status')->default(\App\Enums\Status::ACTIVE);
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
