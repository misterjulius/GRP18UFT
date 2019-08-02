<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: enableForeignKeyConstraints();
        Schema::create('members', function (Blueprint $table) {
            $table->string('member_id');
            $table->string('Name');
            $table->string('Date');
            $table->string('Gender');
            $table->string('Recommender');
            $table->string('District');
            $table->string('Agent');
           
            $table->timestamps();
        }); 

        /* Schema::table('members', function (Blueprint $table) {
            $table->foreign('Agentid')->references('id')->on('agents')->onDelete('cascade');
        });
 */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::table('members', function(){
            $table->dropForeign('Agentid');
        });
        Schema::dropIfExists('members');
    }
}
