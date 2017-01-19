<?php

use yii\db\Migration;

class m17119_160639_startup extends Migration
{
    public function safeUp()
    {
        $styles = [
            'id' => $this->primaryKey(),
            'name'=> $this->string()->notNull()->unique(),
        ];

        $bands = [
            'id' => $this->primaryKey(),
            'name'=> $this->string()->notNull()->unique(),
            'info' => $this->string(),
            'picture_url' => $this->string(),
        ];

        $musicians = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'info' => $this->string(),
            'picture_url' => $this->string(),
            'user' => $this->integer()
        ];

        $instruments = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'info' => $this->string(),
            'picture_url' => $this->string(),
        ];

        $setlists = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'info' => $this->string(),
            'band' => $this->integer()
        ];

        $musics = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'info' => $this->string(),
        ];

        $media = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'info' => $this->string(),
            'url' => $this->string()->notNull(),
            'type' => "ENUM('video', 'audio') NOT NULL"
        ];

        $tabs = [
            'id' => $this->primaryKey(),
            'info' => $this->text(),
        ];

        $events = [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'info' => $this->string(),
            'start_time' => $this->dateTime()->notNull(),
            'end_time' => $this->dateTime()->notNull(),
            'location' => $this->string(),
            'type' => "ENUM('rehearsal', 'live', 'other') NOT NULL"
        ];

        $this->createTable('styles', $styles);
        $this->createTable('bands', $bands);
        $this->createTable('musicians', $musicians);
        $this->createTable('instruments', $instruments);
        $this->createTable('setlists', $setlists);
        $this->createTable('musics', $musics);
        $this->createTable('media', $media);
        $this->createTable('tabs', $tabs);
        $this->createTable('events', $events);

    }

    public function safeDown()
    {

    }

}
