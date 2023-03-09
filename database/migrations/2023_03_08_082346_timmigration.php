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
        schema::create('tim',function (Blueprint $table){
         $table->id();
         $table->string('nim');
         $table->string('nama');
         $table->string('alamat');
        $table->string('jurusan');
        //  $table->timestamp();
        });
    }
    /** 
     Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropifexists('tim');
    }
};
