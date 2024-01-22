<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("product_name");
            $table->string("product_model");
            $table->integer("category_id");
            $table->integer("brand_id");
            $table->string("image");
            $table->integer("product_stock")->default('2')->comment('1 for No 2 for Yes');
            $table->double("product_dpprice");
            $table->double("product_mrpprice");
            $table->string("product_offerprice");
            $table->string("product_shortdesc");
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
        Schema::dropIfExists('tbl_products');
    }
}
