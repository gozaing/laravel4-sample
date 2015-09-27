<?php
/**
 * Created by IntelliJ IDEA.
 * User: baru
 * Date: 2015/09/27
 * Time: 21:33
 */

public function up()
{
    Schema::create('todos', function($table)
    {
        $table->increments('id');
        $table->string('title');
        $table->integer('status');
        $table->timestamp('completed_at')->nullable();
        $table->timestamps();
        $table->softDeletes();
    });
}

public function down()
{
    Schema::dropIfExists('todos');
}