<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->after('email')->nullable();
            $table->text('detail')->after('status')->nullable();
            $table->string('motto')->after('detail')->nullable();
            $table->text('address')->after('motto')->nullable();
            $table->string('phone')->after('address')->nullable();
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
            $table->dropColumn('status');
            $table->dropColumn('detail');
            $table->dropColumn('motto');
            $table->dropColumn('address');
            $table->dropColumn('phone');
        });
    }
}
