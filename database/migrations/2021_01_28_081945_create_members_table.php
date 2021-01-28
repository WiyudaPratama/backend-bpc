<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 8)->nullable();
            $table->string('jurusan', 30)->nullable();
            $table->string('kelas', 10)->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->text('alamat')->nullable();
            $table->text('profil')->nullable();
            $table->foreignId('user_id')->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('members');
    }
}
