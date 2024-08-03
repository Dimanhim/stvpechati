<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Visitor;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        $visitor = new Visitor();
        $visitor->create();

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $categories = Category::findModels()->all();

        return $this->render('home', [
            'categories' => $categories,
        ]);
    }

    public function actionEcp()
    {
        $products = Product::findModels()->andWhere(['type_id' => Product::TYPE_SIGNATURE])->all();

        return $this->render('ecp', [
            'products' => $products,
        ]);
    }

    public function actionPolitics()
    {
        return $this->render('politics');
    }

    public function actionRegistration()
    {
        return $this->render('registration');
    }


}
