<?php namespace DeepthiBenjin\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinMedia extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_media_', function($table)
        {
            $table->string('publication_name', 500);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_media_', function($table)
        {
            $table->dropColumn('publication_name');
            $table->increments('id')->unsigned()->change();
        });
    }
}
