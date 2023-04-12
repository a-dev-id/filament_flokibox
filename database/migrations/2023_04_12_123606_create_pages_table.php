<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('title');
            $table->string('subtitle');
            $table->string('description');
            $table->string('button_whitepaper_text');
            $table->string('button_whitepaper_link');
            $table->string('button_telegram_text');
            $table->string('button_telegram_link');
            $table->string('button_join_comunity_text');
            $table->string('button_join_comunity_link');
            $table->string('button_buy_token_text');
            $table->string('button_buy_token_link');
            $table->string('section_one_title');
            $table->string('section_one_subtitle');
            $table->string('logo');
            $table->string('section_two_title');
            $table->string('section_two_subtitle_one');
            $table->string('section_two_description_one');
            $table->string('section_two_subtitle_two');
            $table->string('section_two_description_two');
            $table->string('section_three_title');
            $table->string('section_three_subtitle_one');
            $table->string('section_three_description_one');
            $table->string('section_three_subtitle_two');
            $table->string('section_three_description_two');
            $table->string('section_three_subtitle_three');
            $table->string('section_three_description_three');
            $table->string('section_three_subtitle_four');
            $table->string('section_three_diagram_text_one');
            $table->string('section_three_diagram_text_two');
            $table->string('section_three_diagram_text_three');
            $table->string('section_three_diagram_text_four');
            $table->string('section_four_title');
            $table->string('section_four_subtitle_one');
            $table->string('section_four_description_one');
            $table->string('section_four_subtitle_two');
            $table->string('section_four_description_two');
            $table->string('section_four_subtitle_three');
            $table->string('section_four_description_three');
            $table->string('section_five_title');
            $table->string('section_five_description');
            $table->string('section_five_email');
            $table->string('section_five_text');
            $table->string('twitter_link');
            $table->string('github_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
