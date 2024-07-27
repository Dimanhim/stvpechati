<?php

namespace common\components;

use Yii;

class TelegramSender extends \yii\base\Component
{
    public $token;

    /**
     * @param null $message
     * @return bool
     */
    public function sendMessageToAdmins($message = null)
    {
        if(!$message) return false;

        if($adminIds = Yii::$app->params['adminTelegramIds']) {
            foreach($adminIds as $adminId) {
                $this->sendMessage($adminId, $message);
            }
        }
        return true;
    }

    /**
     * @param null $telegramId
     * @param null $message
     * @return bool|string
     */
    public function sendMessage($telegramId = null, $message = null)
    {
        if(!$telegramId or !$message) return false;

        if($telegramId) {
            $ch = curl_init();
            if(curl_setopt_array(
                $ch,
                array(
                    CURLOPT_URL => 'https://api.telegram.org/bot' . $this->token . '/sendMessage',
                    CURLOPT_POST => TRUE,
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_TIMEOUT => 10,
                    CURLOPT_POSTFIELDS => array(
                        'chat_id' => $telegramId,
                        'text' => $message,
                        'parse_mode' => 'markdown',
                    ),
                )
            )) {
                $response = curl_exec($ch);
                \Yii::$app->infoLog->add('response', $response, 'telegram-log.txt');
                return $response;
            };
        }
        return true;
    }
}
