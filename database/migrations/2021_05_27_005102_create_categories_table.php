14243
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // buat column id -> integer, autoIncrement dan primary
            $table->id();

            // buat column name -> string
            $table->string("name");

            // buat column created_at dan updated_at
            $table->timestamps();

            // untuk fitur softdelete
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // hapus jika tabel categories exist.
        // untuk migrate:rollback
        Schema::dropIfExists('categories');
    }
}
