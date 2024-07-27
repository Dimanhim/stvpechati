<?php

namespace common\components;

use Yii;
use yii\base\Component;

class MailSender extends Component
{
    const SUBJECT_ADMIN_ORDER          = 1;

    private $_subjects = [
        1 => [
            'title' => 'Новая заявка с сайта',
            'view' => 'admin_order',
        ],
    ];

    public function toAdmin($subject_id, $model = null)
    {
        $subject = array_key_exists($subject_id, $this->_subjects) ? $this->_subjects[$subject_id] : '';
        $sendMail = Yii::$app->mailer->compose($subject['view'], ['model' => $model])
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject($subject['title'].' '.\Yii::$app->name)
            ->setTextBody(' ')
            ->send();
        \Yii::$app->infoLog->add('sendMail', $sendMail);
        return $sendMail;
    }
}
