<?php

use App\Models\Ticket;
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
        Schema::create('ticket_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal(column : 'price',unsigned : true)->default(0);
            $table->foreignIdFor(Ticket::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyInteger('from_age')->nullable();
            $table->tinyInteger('to_age')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_prices');
    }
};
