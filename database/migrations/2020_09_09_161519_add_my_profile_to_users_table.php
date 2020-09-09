<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMyProfileToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->Integer('birthday')->after('email_verified_at');
            $table->boolean('gender')->after('birthday');
            $table->longText('self_introduction')->nullable($value = true)->after('gender');
            $table->string('image_path')->after('self_introduction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('self_introduction');
            $table->dropColumn('image_path');

        });
    }
}
