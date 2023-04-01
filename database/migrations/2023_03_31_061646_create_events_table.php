<?php

use App\Models\User;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('duration')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('template_id')->nullable();
            $table->float('ticket_price')->nullable();
            $table->string('currency')->nullable();
            $table->integer('number_of_tickets')->default(0);
            $table->float('discount')->nullable();
            $table->string('discount_type')->nullable();

            $table->date('discount_end_date')->nullable();
            $table->time('discount_end_time')->nullable();

            $table->date('booking_start_date')->nullable();
            $table->time('booking_start_time')->nullable();

            $table->date('booking_end_date')->nullable();
            $table->time('booking_end_time')->nullable();

            $table->string('refund_policy')->nullable();
            $table->longText('ticket_instruction')->nullable();
            $table->longText('tags')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
