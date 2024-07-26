<?php

namespace frontend\models;

use Yii;
use backend\components\Helpers;
use common\components\MailSender;
use common\models\Order;
use yii\base\Model;

class OrderForm extends Model
{
    public $order;

    public $name;
    public $phone;
    public $product;
    public $utm;

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Поле "Имя" должно быть заполнено'],
            ['name', 'string', 'min' => 2, 'tooShort' => 'Слишком короткое поле "Имя"'],
            ['name', 'string', 'max' => 255, 'tooLong' => 'Слишком длинное поле "Имя"'],
            ['phone', 'required', 'message' => 'Поле "Телефон" должно быть заполнено'],
            ['phone', 'validatePhone'],
            [['phone', 'product'], 'string', 'message' => 'Недопустимое значение поля'],
            ['utm', 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'product' => 'Продукт',
            'utm' => 'Utm',
        ];
    }

    public function saveData()
    {
        $model = new Order();
        $model->name = $this->name;
        $model->product = $this->product;
        $model->phone = Helpers::phoneFormat($this->phone);
        $model->setUtmLabels($this);
        if($model->save()) {
            $this->order = $model;
            return true;
        }
        return false;
    }

    public function validatePhone($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $phone = Helpers::phoneFormat($this->$attribute);
            if(mb_strlen($phone) != 12) {
                $this->addError($attribute, 'Некорректный номер телефона');
            }
        }
    }



    public function firstError()
    {
        if($this->errors) {
            return $this->errors[array_key_first($this->errors)];
            return false;
        }
    }

    public function sendAdminEmail()
    {
        return $this->order ? Yii::$app->mailSender->toAdmin(MailSender::SUBJECT_ADMIN_ORDER, $this->order) : false;
    }

    public function getUtms()
    {
        $utmLabels = [];
        if($params = \Yii::$app->request->get()) {
            foreach($params as $utmLabel => $utmValue) {
                $utmLabels[] = $utmLabel.'='.$utmValue;
            }
        }
        return implode(',', $utmLabels);
    }

}
