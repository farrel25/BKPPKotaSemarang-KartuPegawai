<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('sk_cpns', 255)->nullable();
            $table->boolean('sk_cpns_acc')->nullable();
            $table->string('sk_pns', 255)->nullable();
            $table->boolean('sk_pns_acc')->nullable();
            $table->string('sttpl', 255)->nullable();
            $table->boolean('sttpl_acc')->nullable();
            $table->string('sk_hilang', 255)->nullable();
            $table->boolean('sk_hilang_acc')->nullable();
            $table->string('photo', 255)->nullable();
            $table->boolean('photo_acc')->nullable();
            $table->boolean('is_dicetak')->nullable();
            $table->boolean('is_diambil')->nullable();
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
        Schema::dropIfExists('proposals');
    }
}
