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
        Schema::table('movies', function (Blueprint $table) {
            //1: elimino la colonna cast perchè ho inmportato il file
            $table->dropColumn('cast');

            //2: creo la colonna in riferimento alla tabella casts
            $table->unsignedBigInteger('cast_id')
                ->nullable()
                ->after('id');

            //3: creo la foreign key
            $table->foreign('cast_id')
                ->references('id') //nome della colonna a cui fa riferimento
                ->on('casts') //tabella a cui appartiene
                ->onDelete('set null'); //setto a NULL la colonna se viene cancellata la categoria
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('cast', 150);
            
            //elimina nella tabella movies la foreign cast_id
            $table->dropForeign('movies_cast_id_foreign');

            //elimina la colonna
            $table->dropColumn('cast_id');
        });
    }
};
