<?php namespace REZGUI\Subscribe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSubscribersStatus extends Migration
{

    public function up()
    {
        Schema::table('rezguidev_subscribe_subscribers', function($table)
        {
            $table->boolean('status')->default(1)->after('code');
        });
    }

    public function down()
    {
        Schema::table('rezguidev_subscribe_subscribers', function($table)
        {
            $table->dropColumn('status');
        });
    }

}
