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
            $table->increments('id'); // Поле id c автоматическим инкрементом
            $table->string('name', 255)->nulltable(false);// Поле name длиной 255 симв. , оно не может быть пустым
            $table->string('login', 255)->nulltable(false);            
            $table->string('email', 255)->nulltable(false)->unique('email');//Это поле не может быть пустым и должно быть уникальным
            $table->string('password', 255)->nulltable(false);            
            $table->string('remember_token', 100)->nulltable(true);
            $table->timestamps();//Создаются стандартные поля(дата создания,удаления) created_at,uptaded_at
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
