<?php

namespace frontend\models;

use common\models\Visitor;
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

    /**
     * @return array
     */
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

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'product' => 'Продукт',
            'utm' => 'Utm',
        ];
    }

    /**
     * @return bool
     * @throws \yii\db\Exception
     */
    public function saveData()
    {
        $visitor = new Visitor();
        $model = new Order();
        $model->name = $this->name;
        $model->product = $this->product;
        $model->phone = Helpers::phoneFormat($this->phone);
        $model->setUtmLabels($this);
        $model->session_id = $visitor->getSessionId();
        if($model->save()) {
            $this->order = $model;
            //$this->sendAdminEmail();
            $this->sendTelegram();
            return true;
        }
        return false;
    }

    /**
     * @param $attribute
     * @param $params
     */
    public function validatePhone($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $phone = Helpers::phoneFormat($this->$attribute);
            if(mb_strlen($phone) != 12) {
                $this->addError($attribute, 'Некорректный номер телефона');
            }
        }
    }

    /**
     * @return bool
     */
    public function firstError()
    {
        if($this->errors) {
            return $this->errors[array_key_first($this->errors)];
            return false;
        }
    }

    /**
     * @return bool
     */
    public function sendAdminEmail()
    {
        return true;
        return $this->order ? Yii::$app->mailSender->toAdmin(MailSender::SUBJECT_ADMIN_ORDER, $this->order) : false;
    }

    /**
     * @return mixed
     */
    public function sendTelegram()
    {
        $text = "Новая заявка с сайта\n";
        $text .= "Имя: " . $this->name . "\n";
        $text .= "Телефон: " . $this->phone . "\n";
        $text .= "Выбранный продукт: " . $this->product;

        return Yii::$app->telegram->sendMessageToAdmins($text);
    }

    /**
     * @return string
     */
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
