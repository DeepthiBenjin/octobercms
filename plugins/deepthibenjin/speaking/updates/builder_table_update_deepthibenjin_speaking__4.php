<?php namespace DeepthiBenjin\Speaking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinSpeaking4 extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_speaking_', function($table)
        {
            $table->string('image', 191)->nullable();
        });
    }
}
