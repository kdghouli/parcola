<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VhlsAgenceIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vhls', function (Blueprint $table) {
            $table->foreignId('agence_id')
                ->constrained()->onDelete('cascade');
            $table->foreignId('categorie_id')->nullable()
                ->constrained()->onDelete('cascade');
            $table->foreignId('intitule_id')->nullable()
                ->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vhls', function (Blueprint $table) {
            $table->dropForeign('agence_id');
            $table->dropForeign('categorie_id');
            $table->dropForeign('intitule_id');

        });
    }
}
