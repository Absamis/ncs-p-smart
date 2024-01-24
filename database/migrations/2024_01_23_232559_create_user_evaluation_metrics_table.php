<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_evaluation_metrics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("task_id");
            $table->double("delivery_time")->default(0);
            $table->double("quality_delivery")->default(0);
            $table->double("communication_level")->default(0);
            $table->double("documentation_level")->default(0);
            $table->double("engagement_level")->default(0);
            $table->integer("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_evaluation_metrics');
    }
};
