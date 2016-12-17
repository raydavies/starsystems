<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableIdColumnNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function(Blueprint $table) {
            $table->renameColumn('lesson_id', 'id');
        });
        Schema::table('levels', function(Blueprint $table) {
            $table->renameColumn('level_id', 'id');
        });
        Schema::table('subjects', function(Blueprint $table) {
            $table->renameColumn('subject_id', 'id');
        });
        Schema::table('testimonials', function(Blueprint $table) {
            $table->renameColumn('testimonial_id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function(Blueprint $table) {
            $table->renameColumn('id', 'lesson_id');
        });
        Schema::table('levels', function(Blueprint $table) {
            $table->renameColumn('id', 'level_id');
        });
        Schema::table('subjects', function(Blueprint $table) {
            $table->renameColumn('id', 'subject_id');
        });
        Schema::table('testimonials', function(Blueprint $table) {
            $table->renameColumn('id', 'testimonial_id');
        });
    }
}
