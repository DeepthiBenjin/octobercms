<?php namespace DeepthiBenjin\Publications\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeepthibenjinPublications extends Migration
{
    public function up()
    {
        Schema::table('deepthibenjin_publications_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->text('publication')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('deepthibenjin_publications_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->date('publication')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
