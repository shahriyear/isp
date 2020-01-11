<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('company_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('branch_id')->references('id')->on('branches');

        });

        /*Insert By Default Master User While Migrate*/
        DB::table('users')->insert([
            'code' => '119050911',
            'name' => 'Shahriyear',
            'username' => 'sam',
            'email' => 'master@gmail.com',
            'phone' => '01749798295',
            'password' => '$2y$12$zYmrIk8pbsrFGLzUBkv52u8kFX5D1H9JDK30B9mhVxxZF6dyY6aD.',
            'company_id' => '1',
            'branch_id' => '1',
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
        Schema::dropIfExists('users');
    }
}
