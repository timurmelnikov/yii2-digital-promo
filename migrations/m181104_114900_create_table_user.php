<?php

use yii\db\Migration;

/**
 * Class m181104_114900_create_table_user
 */
class m181104_114900_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('user', [
            'id' => $this->primaryKey(11),
            'username' => $this->string(20)->notNull()->comment('Имя пользователя'),
            'password' => $this->string(20)->notNull()->comment('Пароль'),
            //'authKey' => $this->string(255)->comment('Ключ аутентификации'),
            //'accessToken' => $this->string(255)->comment('Токен доступа'),
        ]);
        $this->createIndex('unique_username', 'user', 'username', true);

        $this->insert('user', ['id' => 1, 'username' => 'admin', 'password' => '111']);
        $this->insert('user', ['id' => 2, 'username' => 'manager', 'password' => '111']);
        $this->insert('user', ['id' => 3, 'username' => 'user1', 'password' => '111']);
        $this->insert('user', ['id' => 4, 'username' => 'user2', 'password' => '111']);

        $this->insert('auth_assignment', ['item_name' => 'admin', 'user_id' => 1]);
        $this->insert('auth_assignment', ['item_name' => 'manager', 'user_id' => 2]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_114900_create_table_user cannot be reverted.\n";

        return false;
    }


}
