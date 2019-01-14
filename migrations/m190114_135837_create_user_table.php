<?php
declare(strict_types=1);

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m190114_135837_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(32)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'api_token' => $this->string(32)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
