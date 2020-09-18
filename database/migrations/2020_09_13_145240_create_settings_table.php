<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('mainurl');
            $table->string('email');
            $table->text('description', 65535);
            $table->string('logo');
            $table->string('link');
            $table->string('address');
            $table->string('phone');
            $table->string('mobilephone');
            $table->string('ctitle1');
            $table->string('calttitle1');
            $table->string('ctitle2');
            $table->string('calttitle2');
            $table->string('ctitle3');
            $table->string('calttitle3');
            $table->string('ctitle4');
            $table->string('calttitle4');
            $table->string('ctitle5');
            $table->string('calttitle5');
            $table->string('ctitle6');
            $table->string('calttitle6');
            $table->string('facebook');
            $table->float('lat', 20, 10);
            $table->float('lng', 20, 10);
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
        Schema::drop('settings');
    }

}
