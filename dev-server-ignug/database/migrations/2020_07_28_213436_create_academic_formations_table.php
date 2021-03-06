<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa-empleo')->create('academic_formations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('professional_id')->constrained('professionals');
            $table->string('institution');
            $table->string('career');
            $table->string('professional_degree');
            $table->date('registration_date')->nullable();
            $table->string('senescyt_code')->nullable();
            $table->boolean('has_titling')->nullable()->default(false);;
            $table->string('state')->default('ACTIVE');
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
        Schema::connection('pgsql-bolsa-empleo')->dropIfExists('academic_formations');
    }
}
