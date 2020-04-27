<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToLbBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lb_bookings', function (Blueprint $table) {
            $table->enum('status', ['waiting', 'called', 'processing', 'completed', 'reject'])->after('is_read')->default('waiting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lb_bookings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
