<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIspUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isp_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('isp_id');
            $table->string('name');
            $table->string('email');
            $table->string('ip');
            $table->string('phone');
            $table->text('address')->nullable();
            $table->string('status')->default('a');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('isp_id')->references('id')->on('isps')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isp_users');
    }
}
