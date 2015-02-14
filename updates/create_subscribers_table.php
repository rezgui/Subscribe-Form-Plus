<?php namespace Rezgui\Subscribe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSubscribersTable extends Migration
{

    public function up()
    {
        Schema::create('rezguidev_subscribe_subscribers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email')->unique();
            $table->date('sdate')->default(date("Y-m-d H:i:s"));			
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rezguidev_subscribe_subscribers');
    }

}
