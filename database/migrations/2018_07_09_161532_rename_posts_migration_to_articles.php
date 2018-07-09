<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class RenamePostsMigrationToArticles extends Migration
{
    public function up()
    {
        Schema::rename('posts','articles');
    }

    public function down()
    {
        Schema::rename('articles','posts');
    }
}
