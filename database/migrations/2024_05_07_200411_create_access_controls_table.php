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
        Schema::create('access_controls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_fk');
            $table->unsignedBigInteger('permited_user_fk');
            
            $table->foreign('document_fk')->references('id')->on('documents')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('permited_user_fk',15)->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_controls');
    }
};
