<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_flows', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('audit_bill_type_id')->index()->comment('资源ID');
            $table->string('title', 60)->comment('流名称');
            $table->text('description')->nullable()->comment('流描述');
            $table->tinyInteger('status')->default(0)->comment('流状态');
            $table->unsignedInteger('creator_id')->index()->comment('创建者ID');
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
        Schema::dropIfExists('audit_flows');
    }
}
