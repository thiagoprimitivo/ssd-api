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
            $table->string('email', 100);
            $table->string('url', 50);
            $table->enum('status', ['Ativo', 'Cancelado']);
            $table->string('user', 100);
            $table->text('new_justificative');
            $table->text('last_justificative');
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
