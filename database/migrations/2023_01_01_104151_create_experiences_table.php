<?php

use App\Enums\EmploymentTypeEnum;
use App\Enums\LocationTypeEnum;
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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('employment_type_enum',EmploymentTypeEnum::values());
            $table->string('company');
            $table->string('location');
            $table->enum('location_type_enum',LocationTypeEnum::values());
            $table->text('description')->nullable();
            $table->date('start_at');
            $table->date('end_at')->nullable();
            $table->unsignedBigInteger('show_order');
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
        Schema::dropIfExists('experiences');
    }
};
