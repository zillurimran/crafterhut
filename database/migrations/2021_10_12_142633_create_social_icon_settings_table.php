<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialIconSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_icon_settings', function (Blueprint $table) {
            $table->id();
            $table->string('fb');
            $table->string('fb_url');
            $table->string('twitter');
            $table->string('twitter_url');
            $table->string('instagram');
            $table->string('instagram_url');
            $table->string('youtube');
            $table->string('youtube_url');
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
        Schema::dropIfExists('social_icon_settings');
    }
}
