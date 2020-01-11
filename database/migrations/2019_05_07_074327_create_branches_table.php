<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->text('address');
            $table->unsignedBigInteger('company_id');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('company_id')->references('id')->on('companies');
        });

        /*Insert By Default Master Branch While Migrate*/
        DB::table('branches')->insert([
            'code' => '119061211',
            'name' => 'Head Office',
            'address' => 'BADDA',
            'status' => 'a',
            'company_id' => '1',
            'created_at' => '2019-05-11 00:00:00',
            'updated_at' => '2019-05-11 00:00:00',
            'created_by' => '1',
            'updated_by' => '1'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
