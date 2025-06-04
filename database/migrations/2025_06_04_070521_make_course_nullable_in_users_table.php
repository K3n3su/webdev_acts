<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  // database/migrations/xxxx_xx_xx_xxxxxx_make_course_nullable_in_users_table.php

public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('course')->nullable()->change();
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('course')->nullable(false)->change();
    });
}

};
