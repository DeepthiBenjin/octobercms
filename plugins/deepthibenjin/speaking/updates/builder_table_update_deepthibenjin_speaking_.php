<?php namespace DeepthiBenjin\Speaking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinSpeaking extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
