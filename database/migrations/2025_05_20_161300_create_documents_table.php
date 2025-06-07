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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable();
            $table->string("link");
            $table->enum("type", ["TD","TP","COURS", "EXAM", "TEST"]);
            $table->foreignId("owner_id")->nullable()->constrained("users", "id")->cascadeOnUpdate()->nullOnUpdate();
            $table->foreignId("module_id")->constrained("modules", "id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
