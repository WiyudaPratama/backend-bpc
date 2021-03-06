<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('study_id')->nullable()->constrained('studies')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('jadwal', 10)->nullable();
            $table->enum('jam', ['08.30 - 10.30', '11.00 - 13.00', '14.00 - 16.00', '17.00 - 19.00'])->nullable();
            $table->integer('transaction_total')->nullable();
            $table->string('transaction_status', 10)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
