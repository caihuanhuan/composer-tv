<?php

namespace mdm\tv\controllers;

use yii\web\Controller;
use mdm\tv\models\User;

/**
 * Default controller for the `tv` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    
    	$data=User::getUser(2);
    	var_dump($data);die;
        return $this->render('index');
    }
}
