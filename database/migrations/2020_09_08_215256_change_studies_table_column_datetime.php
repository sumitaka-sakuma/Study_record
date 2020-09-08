<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStudiesTableColumnDatetime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studies', function (Blueprint $table) {
            
            //カラム名の変更
            $table->renameColumn('started_time', 'started_date');
            $table->renameColumn('ended_time', 'ended_date');
    
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studies', function (Blueprint $table) {

            //カラム名を戻す
            $table->renameColumn('started_date','started_time');
            $table->renameColumn('ended_date','ended_time');
        });
    }
}
