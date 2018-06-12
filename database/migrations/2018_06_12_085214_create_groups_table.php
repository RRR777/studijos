<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cource_id');
            $table->unsignedInteger('lector_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

/*         Schema::table('groups', function($table)
        {
            $table->foreign('cource_id')
                ->references('id')
                ->on('cources')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('lector_id')
                ->references('id')
                ->on('lectures')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
