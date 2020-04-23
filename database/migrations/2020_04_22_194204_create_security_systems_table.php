<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecuritySystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->string('acronyms', 10);
            $table->string('email', 100)->nullable();
            $table->string('url', 50)->nullable();
            $table->enum('status', ['Ativo', 'Cancelado'])->default('Ativo');
            $table->string('user', 100)->nullable();
            $table->text('new_justificative')->nullable();
            $table->text('last_justificative')->nullable();
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
        Schema::dropIfExists('security_systems');
    }
}
