<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stvp_products".
 *
 * @property int $id
 * @property string|null $short_name
 * @property string|null $name
 * @property int|null $category_id
 * @property int|null $type_id
 * @property string|null $short_description
 * @property string|null $description
 * @property int|null $price
 * @property int|null $is_active
 * @property int|null $deleted
 * @property int|null $position
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Product extends BaseModel
{
    const TYPE_STAMP     = 1;
    const TYPE_SIGNATURE = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @return string
     */
    public static function modelName()
    {
        return 'Продукция';
    }

    /**
     * @return int
     */
    public static function typeId()
    {
        return Gallery::TYPE_PRODUCT;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['category_id', 'type_id', 'price'], 'integer'],
            [['short_description', 'description'], 'string'],
            [['short_name', 'name'], 'string', 'max' => 255],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'short_name' => 'Название для формы',
            'name' => 'Название',
            'category_id' => 'Категория',
            'type_id' => 'Тип',
            'short_description' => 'Краткое описание',
            'description' => 'Описание',
            'price' => 'Цена',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return array
     */
    public static function getTypesList()
    {
        return [
            self::TYPE_STAMP     => 'Печати и штампы',
            self::TYPE_SIGNATURE => 'Электронные подписи',
        ];
    }

    /**
     * @return mixed|null
     */
    public function getTypeName()
    {
        $types = self::getTypesList();
        return $types[$this->type_id] ?? null;
    }
}
