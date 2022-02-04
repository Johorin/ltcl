<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBodyColumnOfPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('body', 'contents');   //カラムの物理名変更
        });
        
        Schema::table('posts', function (Blueprint $table) {
            $table->string('contents')->nullable()->change();   //カラムの型定義変更（本来は別のマイグレーションファイルを作成して行うべき。）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
