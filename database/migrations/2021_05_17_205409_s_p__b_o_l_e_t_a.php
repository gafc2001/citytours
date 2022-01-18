<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SPBOLETA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        create or replace procedure boleta(
            fecha date,
            id_lugar int,
            id_travel int,
            cantidad int,
            username int
        )
        language plpgsql
        as $$
        begin
            insert into boletas (quantity, total, subtotal, id_travel,id_user) 
            values (cantidad,
            cantidad*(select price from viajes as v WHERE v.date=fecha AND v.id_lugar=id_lugar),
            cantidad*(select price from viajes as v WHERE v.date=fecha AND v.id_lugar=id_lugar)+(select discount from viajes as v WHERE v.id_lugar=id_lugar and v.date=fecha),
            id_travel,username);
        end;$$');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('drop procedure if exists boleta');
    }
}
