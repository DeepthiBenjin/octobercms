<?php namespace DeepthiBenjin\Speaking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinSpeaking3 extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->string('image', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->string('image', 191)->nullable(false)->change();
        });
    }
}
