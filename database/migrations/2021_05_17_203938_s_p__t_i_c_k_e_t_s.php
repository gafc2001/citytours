<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SPTICKETS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::unprepared('
        create or replace procedure stock_tickes(
        id_travel int,
        cantidad int
        )
        language plpgsql
        as $$
        begin
        update viajes  set tickets=tickets - cantidad
        where id =id_travel;
        end;$$');   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('drop procedure if exists stock_tickes');
    }
}
