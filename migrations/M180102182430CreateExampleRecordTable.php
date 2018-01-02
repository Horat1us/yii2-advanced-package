<?php

namespace Horat1us\Package\Migrations;

use yii\db\Migration;

/**
 * Class M180102182430CreateExampleRecordTable
 */
class M180102182430CreateExampleRecordTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('example_record', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('example_record');
    }
}
