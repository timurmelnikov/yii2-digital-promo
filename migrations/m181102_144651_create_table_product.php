<?php

use yii\db\Migration;

/**
 * Class m181102_144251_create_table_product
 */
class m181102_144651_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(11),
            'category_id' => $this->integer(11)->notNull()->comment('Категория'),
            'name' => $this->string(100)->notNull()->comment('Наименование'),
            'description' => $this->text()->comment('Описание'),

        ]);


        $this->addForeignKey(
            'fk1_category_id',
            'product', 'category_id',
            'category', 'id',
            'RESTRICT'
        );



        $this->insert('product', ['category_id'=>1, 'name' => 'Водка', 'description'=>'"Русская"']);
        $this->insert('product', ['category_id'=>1, 'name' => 'Водка', 'description'=>'"Столичная"']);
        $this->insert('product', ['category_id'=>1, 'name' => 'Водка', 'description'=>'"Nemiroff"']);

        $this->insert('product', ['category_id'=>3, 'name' => 'Шампанское', 'description'=>'"Одесское"']);
        $this->insert('product', ['category_id'=>3, 'name' => 'Вино сухое', 'description'=>'"Рислинг"']);

        $this->insert('product', ['category_id'=>8, 'name' => 'Колбаса вареная', 'description'=>'"Докторская", высший сорт']);
        $this->insert('product', ['category_id'=>8, 'name' => 'Колбаса вареная', 'description'=>'"Молочная", 1-й сорт']);
        $this->insert('product', ['category_id'=>8, 'name' => 'Колбаса сыро-копченая', 'description'=>'"Московская"']);
        $this->insert('product', ['category_id'=>8, 'name' => 'Грудинка копченая', 'description'=>'"По Закарпатски"']);
        $this->insert('product', ['category_id'=>8, 'name' => 'Вырезка варено-копченая', 'description'=>'"Деликатесная"']);


        $this->insert('product', ['category_id'=>17, 'name' => 'Вода газированная', 'description'=>'"Кока-кола"']);
        $this->insert('product', ['category_id'=>17, 'name' => 'Вода газированная', 'description'=>'"Фанта"']);
        $this->insert('product', ['category_id'=>17, 'name' => 'Вода газированная', 'description'=>'"Спрайт"']);
        $this->insert('product', ['category_id'=>17, 'name' => 'Сок томатный', 'description'=>'"Садочок"']);
        $this->insert('product', ['category_id'=>17, 'name' => 'Сок яблочный', 'description'=>'"Biola"']);


        $this->insert('product', ['category_id'=>11, 'name' => 'Консервы рыбные', 'description'=>'Шпроты "Балтика"']);
        $this->insert('product', ['category_id'=>11, 'name' => 'Консервы рыбные', 'description'=>'Килька в томате']);
        $this->insert('product', ['category_id'=>11, 'name' => 'Консервы мясные', 'description'=>'"Завтрак туриста"']);


        $this->insert('product', ['category_id'=>16, 'name' => 'Телятина', 'description'=>'Телятина отборная']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Свинина', 'description'=>'Отборная отборная']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Свинина', 'description'=>'1-й сорт']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Баранина', 'description'=>'На кости']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Филе куриное', 'description'=>'высший сорт']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Бедра куриные', 'description'=>'высший сорт']);
        $this->insert('product', ['category_id'=>16, 'name' => 'Вырезка свинная', 'description'=>'высший сорт']);

        $this->insert('product', ['category_id'=>13, 'name' => 'Майонез "Чумак"', 'description'=>'50% жирность']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Майонез "Чумак Европейский"', 'description'=>'67% жирность']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Майонез "Чумак Легкий"', 'description'=>'40% жирность']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Кетчуп "Чумак"', 'description'=>'Из свежих помидоров']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Кутчуп "Острый"', 'description'=>'С добавлением перца "Чили"']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Соус "Краснодарский"', 'description'=>'Состав: томаты, перец, чеснок']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Масло "Селятське"', 'description'=>'79% жирность']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Масло "Коровка"', 'description'=>'82% жирность']);
        $this->insert('product', ['category_id'=>13, 'name' => 'Масло "Бутербродное"', 'description'=>'72% жирность']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181102_144251_create_table_product cannot be reverted.\n";

        return false;
    }


}
