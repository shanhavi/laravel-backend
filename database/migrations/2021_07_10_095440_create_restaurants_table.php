<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('rest_name_e');
            $table->string('rest_name_a');
            $table->string('rest_slogan_e');
            $table->string('rest_slogan_a');
            $table->string('Rest_number');
            $table->string(' country');
            $table->integer(' zip_code');
            $table->string('address');
            $table->string('city');
            $table->string('state_region');
            $table->unsignedBigInteger('cuisine_id');
            $table->foreign('cuisine_id')->references('id')->on('cuisines')->onDelete('cascade');
            $table->string('available_services');
            $table->boolean('is_restaurant_published');
            $table->boolean('is_restaurant_inside_mall');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('product-id');
            $table->foreign('product-id')->references('id')->on('products')->onDelete('cascade');
            $table->boolean('status');
            $table->string('setting');
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
        Schema::dropIfExists('restaurants');
    }
}
