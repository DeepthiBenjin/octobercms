<?php namespace DeepthiBenjin\Speaking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinSpeaking2 extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
