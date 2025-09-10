<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->comment('ID');

            $table->foreignId('categories_id')
                ->constrained('categories')
                ->onDelete('cascade')
                ->comment('カテゴリID');

            $table->string('last_name', 255)->comment('姓');
            $table->string('first_name', 255)->comment('名');

            $table->tinyInteger('gender')->unsigned()->comment('性別');
            $table->string('email', 255)->comment('メールアドレス');
            $table->string('tel', 255)->comment('電話番号');
            $table->string('address', 255)->comment('住所');
            $table->string('building')->nullable()->comment('建物名');
            $table->text('detail')->comment('詳細');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
