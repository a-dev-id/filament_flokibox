<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'title',
        'subtitle',
        'description',
        'button_whitepaper_text',
        'button_whitepaper_link',
        'button_telegram_text',
        'button_telegram_link',
        'button_join_comunity_text',
        'button_join_comunity_link',
        'button_buy_token_text',
        'button_buy_token_link',
        'section_one_title',
        'section_one_subtitle',
        'logo',
        'section_two_title',
        'section_two_subtitle_one',
        'section_two_description_one',
        'section_two_subtitle_two',
        'section_two_description_two',
        'section_three_title',
        'section_three_subtitle_one',
        'section_three_description_one',
        'section_three_subtitle_two',
        'section_three_description_two',
        'section_three_subtitle_three',
        'section_three_description_three',
        'section_three_subtitle_four',
        'section_three_diagram_text_one',
        'section_three_diagram_text_two',
        'section_three_diagram_text_three',
        'section_three_diagram_text_four',
        'section_four_title',
        'section_four_subtitle_one',
        'section_four_description_one',
        'section_four_subtitle_two',
        'section_four_description_two',
        'section_four_subtitle_three',
        'section_four_description_three',
        'section_five_title',
        'section_five_description',
        'section_five_email',
        'section_five_text',
        'twitter_link',
        'github_link',
        'telegram_link',
        'nav_bg_color',
        'header_bg_color',
        'section_one_bg_color',
        'section_two_bg_color',
        'section_three_bg_color',
        'section_four_bg_color',
        'section_five_bg_color',
    ];
}
