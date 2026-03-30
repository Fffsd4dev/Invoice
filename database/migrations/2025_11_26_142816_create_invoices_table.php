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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('type');
            $table->date('issue_date');
            $table->date('due_date');
            $table->decimal('tax', 8, 2);
            $table->decimal('balance_due', 15, 2);
            $table->decimal('total', 15, 2);
            $table->decimal('sub_total', 15, 2);
            $table->foreignId('company_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
