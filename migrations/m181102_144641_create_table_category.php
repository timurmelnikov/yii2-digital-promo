<?php

use yii\db\Migration;

/**
 * Class m181102_144641_create_table_category
 */
class m181102_144641_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('category', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(100)->notNull()->comment('Наименование'),
        ]);

        $this->insert('category', ['id' => 1, 'name' => 'Алкоголь крепкий']);
        $this->insert('category', ['id' => 2, 'name' => 'Бакалея']);
        $this->insert('category', ['id' => 3, 'name' => 'Вино и шампанское']);
        $this->insert('category', ['id' => 4, 'name' => 'Горячие напитки']);
        $this->insert('category', ['id' => 5, 'name' => 'Диетическое и здоровое питание']);
        $this->insert('category', ['id' => 6, 'name' => 'Замороженные продукты']);
        $this->insert('category', ['id' => 7, 'name' => 'Икра и рыбная гастрономия']);
        $this->insert('category', ['id' => 8, 'name' => 'Колбасные изделия и мясные деликатесы']);
        $this->insert('category', ['id' => 9, 'name' => 'Кондитерские изделия длительного хранения']);
        $this->insert('category', ['id' => 10, 'name' => 'Кондитерские изделия короткого срока хранения']);
        $this->insert('category', ['id' => 11, 'name' => 'Консервация']);
        $this->insert('category', ['id' => 12, 'name' => 'Масла растительные, кетчупы, соусы']);
        $this->insert('category', ['id' => 13, 'name' => 'Масло, майонез']);
        $this->insert('category', ['id' => 14, 'name' => 'Молочные продукты']);
        $this->insert('category', ['id' => 15, 'name' => 'Мороженое']);
        $this->insert('category', ['id' => 16, 'name' => 'Мясо']);
        $this->insert('category', ['id' => 17, 'name' => 'Напитки']);
        $this->insert('category', ['id' => 18, 'name' => 'Овощи']);
        $this->insert('category', ['id' => 19, 'name' => 'Овощи и плоды приготовленные']);
        $this->insert('category', ['id' => 20, 'name' => 'Орехи, сухофрукты']);
        $this->insert('category', ['id' => 21, 'name' => 'Пиво и напитки слабоалкогольные']);
        $this->insert('category', ['id' => 22, 'name' => 'Пищевые ингредиенты']);
        $this->insert('category', ['id' => 23, 'name' => 'Продукты для детского питания']);
        $this->insert('category', ['id' => 24, 'name' => 'Прочая гастрономия']);
        $this->insert('category', ['id' => 25, 'name' => 'Птица']);
        $this->insert('category', ['id' => 26, 'name' => 'Рыба и морепродукты замороженные']);
        $this->insert('category', ['id' => 27, 'name' => 'Рыба и морепродукты охлажденные']);
        $this->insert('category', ['id' => 28, 'name' => 'Сыры']);
        $this->insert('category', ['id' => 29, 'name' => 'Табак']);
        $this->insert('category', ['id' => 30, 'name' => 'Товары для животных']);
        $this->insert('category', ['id' => 31, 'name' => 'Фрукты, ягоды']);
        $this->insert('category', ['id' => 32, 'name' => 'Хлебобулочные изделия']);
        $this->insert('category', ['id' => 33, 'name' => 'Яйцо']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181102_144641_create_table_category cannot be reverted.\n";

        return false;
    }


}
