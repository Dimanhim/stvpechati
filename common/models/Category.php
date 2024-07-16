<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stvp_categories".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $parent_id
 * @property int|null $is_active
 * @property int|null $deleted
 * @property int|null $position
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Category extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @return string
     */
    public static function modelName()
    {
        return 'Категории';
    }

    /**
     * @return int
     */
    public static function typeId()
    {
        return Gallery::TYPE_CATEGORY;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'name' => 'Название',
            'parent_id' => 'Родительская категория',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }
}
