<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('posts', function (Blueprint $table) {
            // $table->unsignedBigInteger('category_id')
            //       ->nullable()
            //       ->after('user_id');

            //     $table->foreign('category_id')
            //           ->references('id')
            //           ->on('categories')
            //           ->onDelete('CASCADE');

            $table->foreignId('category_id')
                  ->nullable()
                  ->after('user_id')
                  ->constrained('categories')
                  ->onDelete('set null');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            // $table->dropForeign('posts_category_id_foreign');
        });

        Schema::disableForeignKeyConstraints();
        
    }
}
