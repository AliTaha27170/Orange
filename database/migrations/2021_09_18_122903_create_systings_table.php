<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systings', function (Blueprint $table) {
            $table->id();
            $table->integer('pak')->default(1)->comment('لإيقاف التسجيل على باقة مجتمع سند 0 ') ;
            $table->integer('mzaya')->default(1)->comment('لإخفاء مزايا 0 ') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systings');
    }
}
