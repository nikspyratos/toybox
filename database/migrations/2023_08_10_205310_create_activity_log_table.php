<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $connection = config('activitylog.database_connection');
        $tableName = config('activitylog.table_name');
        if (! Schema::connection($connection)->hasTable($tableName)) {
            Schema::connection($connection)->create(
                $tableName,
                function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('log_name')->nullable();
                    $table->text('description');
                    $table->nullableMorphs('subject', 'subject');
                    $table->string('event')->nullable();
                    $table->nullableMorphs('causer', 'causer');
                    $table->json('properties')->nullable();
                    $table->uuid('batch_uuid')->nullable();
                    $table->timestamps();
                    $table->index('log_name');
                }
            );
        }
    }

    public function down(): void
    {
        Schema::connection(config('activitylog.database_connection'))->dropIfExists(config('activitylog.table_name'));
    }
};
