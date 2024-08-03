<?php

namespace common\models;

use backend\components\Helpers;
use Yii;

/**
 * This is the model class for table "stvp_orders".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $product
 * @property int|null $price
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $utm_source
 * @property string|null $utm_campaign
 * @property string|null $utm_medium
 * @property string|null $utm_content
 * @property string|null $utm_term
 * @property string|null $comment
 * @property int|null $is_active
 * @property int|null $deleted
 * @property int|null $position
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Order extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * @return string
     */
    public static function modelName()
    {
        return 'Заказы';
    }

    /**
     * @return int
     */
    public static function typeId()
    {
        return Gallery::TYPE_ORDER;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['price', 'send_email', 'send_telegram', 'session_id'], 'integer'],
            [['utm_source', 'utm_campaign', 'utm_medium', 'utm_content', 'utm_term', 'comment'], 'string'],
            [['name', 'product', 'phone', 'email'], 'string', 'max' => 255],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'name' => 'Имя',
            'product' => 'Название формы',
            'price' => 'Стоимость',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'utm_source' => 'Utm Source',
            'utm_campaign' => 'Utm Campaign',
            'utm_medium' => 'Utm Medium',
            'utm_content' => 'Utm Content',
            'utm_term' => 'Utm Term',
            'comment' => 'Комментарий',
            'send_email' => 'Отправлен email',
            'send_telegram' => 'Отправлено в телеграм',
            'session_id' => 'Сессия',
        ]);
    }

    public function beforeSave($insert)
    {
        if($this->phone) {
            $this->phone = Helpers::phoneFormat($this->phone);
        }
        return parent::beforeSave($insert);
    }

    public function setUtmLabels($form)
    {
        if($form->utm and ($utms = explode(',', $form->utm))) {
            foreach($utms as $utm) {
                if($utmValues = explode('=', $utm)) {
                    $utmLabel = null;
                    $utmValue = null;
                    if(isset($utmValues[0])) $utmLabel = $utmValues[0];
                    if(isset($utmValues[1])) $utmValue = $utmValues[1];
                    if($utmLabel and $utmValue and array_key_exists($utmLabel, $this->attributeLabels())) {
                        $this->$utmLabel = $utmValue;
                    }
                }
            }
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitor()
    {
        return $this->hasOne(Visitor::className(), ['session_id' => 'session_id']);
    }
}
