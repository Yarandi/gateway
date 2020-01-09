<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Larabookir\Gateway\PortAbstract;
use Larabookir\Gateway\GatewayResolver;
use Larabookir\Gateway\Enum;

class CreateGatewayConfigTable extends Migration
{
    function getTable()
    {
        return config('gateway.config_table', 'gateway_config');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->getTable(), function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->enum('port', (array) Enum::getIPGs())->unique();
            $table->mediumText('params');
            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->getTable());
    }
}
