<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.12.16
 * Time: 21:42
 */

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){

        return $this->render('index', [
            'data' => Test::output(),
        ]);
    }

    public function actionInsert(){

        return $this->render('insert', [
            'data' => Test::insertData(),
        ]);
    }

    public function actionEdit(){

        return $this->render('edit', [
            'data' => Test::editData(),
        ]);
    }

}