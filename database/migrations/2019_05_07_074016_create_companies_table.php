<?php

use Illuminate\Support\Facades\DB;
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
            $table->bigIncrements('id');
            $table->bigInteger('code')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('status');
            $table->text('logo')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });

        /*Insert By Default Master Company While Migrate*/
        DB::table('companies')->insert([
            'code'=>'119051211',
            'name'=>'ISP',
            'address'=>'Dhaka, Bangladesh',
            'status'=>'a',
            'logo'=>'logo.png',
            'created_at'=>'2019-05-11 00:00:00',
            'updated_at'=>'2019-05-11 00:00:00',
            'created_by'=>'1',
            'updated_by'=>'1'
        ]);
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
