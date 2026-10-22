
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali_rencana');
            $table->string('status')->default('dipinjam');
        });
    }

    public function down(): void
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['member_id']);
            $table->dropColumn([
                'book_id',
                'member_id',
                'tanggal_pinjam',
                'tanggal_kembali_rencana',
                'status',
            ]);
        });
    }
};
