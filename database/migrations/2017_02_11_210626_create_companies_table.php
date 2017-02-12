<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company', 255);
            $table->string('role', 255);
            $table->string('hash', 255);
            $table->boolean('will_contact');
            $table->boolean('over_qualified');
            $table->boolean('under_qualified');
            $table->boolean('no_bacholers');
            $table->boolean('resume_issues');
            $table->boolean('cover_issues');
            $table->text('additional_information');
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
        Schema::dropIfExists('companies');
    }
}
