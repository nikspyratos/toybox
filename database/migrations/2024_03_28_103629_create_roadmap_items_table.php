<?php

declare(strict_types=1);

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roadmap_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('status')->index();
            $table->text('content');
            $table->boolean('published');
            $table->unsignedInteger('votes')->default(0);
            $table->foreignIdFor(User::class, 'suggester_id')->nullable();
            $table->foreignIdFor(Feedback::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roadmap_items');
    }
};
