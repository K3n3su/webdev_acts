<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasswordToUsersTable extends Migration
{
   public function up(): void
{
    if (!Schema::hasColumn('users', 'password')) {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->after('email');
        });
    }
}

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }
}
