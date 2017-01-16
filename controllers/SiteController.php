<?php

namespace app\controllers;

use yii\web\ErrorAction;
use yii\web\Controller;

/**
 * Class MainController
 */
class SiteController extends Controller
{
    /**
     * @var string
     */
    public $layout = false;

    /**
     * @return string
     */
    public function actionIndex()
    {
        return 'Hello!';
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }
}
