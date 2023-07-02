<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anamnesis_alimentaria', function (Blueprint $table) {
            $table->dropColumn('gustos');
            $table->dropColumn('alimentos_rechazados');
        });

        Schema::table('anamnesis_alimentaria_user', function (Blueprint $table){
            $table->dropForeign(['anamnesis_alimentaria_id']);
            $table->dropColumn('anamnesis_alimentaria_id');
            $table->string('gustos')->after('user_id');
            $table->string('alimentos_rechazados')->after('gustos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anamnesis_alimentaria', function (Blueprint $table) {
            //
        });
    }
};
