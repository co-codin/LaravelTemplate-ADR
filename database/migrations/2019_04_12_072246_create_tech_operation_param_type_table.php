<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechOperationParamTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_operation_param_type', function (Blueprint $table) {
            $table->integer('tech_operation_type_id')->unsigned()->index();
            $table->integer('tech_operation_param_id')->unsigned()->index();

            $table->foreign('tech_operation_type_id')->references('id')->on('tech_operation_types')->onDelete('cascade');
            $table->foreign('tech_operation_param_id')->references('id')->on('tech_operation_params')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_operation_param_type');
    }
}
