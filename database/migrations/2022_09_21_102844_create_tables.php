<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statefuls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Stateful::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
