<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('consignment')->nullable()->default(null);
            $table->string('sh_address')->nullable()->default(null);
            $table->string('sh_name')->nullable()->default(null);
            $table->string('sh_phone')->nullable()->default(null);
            $table->string('destination')->nullable()->default(null);

            $table->string('re_address')->nullable()->default(null);
            $table->string('re_name')->nullable()->default(null);
            $table->string('re_phone')->nullable()->default(null);

            $table->string('no_of_peices')->nullable()->default(null);
            $table->string('weight')->nullable()->default(null);
            $table->string('total_amout')->nullable()->default(null);
            $table->string('package_type')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->dateTime('order_date')->nullable()->default(null);
            $table->dateTime('expected_delivery_date')->nullable()->default(null);

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
        Schema::dropIfExists('cargo_inventories');
    }
}
