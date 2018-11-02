<?php

use yii\db\Migration;

/**
 * Class m181104_113012_rbac
 */
class m181104_113012_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        //Вызываем миграцию RBAC
        Yii::$app->runAction('migrate/up', [
            'migrationPath' => '@yii/rbac/migrations',
            'interactive' => false,
        ]);

        //Создаем роли
        $role = Yii::$app->authManager->createRole('admin');
        $role->description = 'Админ';
        Yii::$app->authManager->add($role);

        $role = Yii::$app->authManager->createRole('manager');
        $role->description = 'Менеджер';
        Yii::$app->authManager->add($role);




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_113012_rbac cannot be reverted.\n";

        return false;
    }


}
