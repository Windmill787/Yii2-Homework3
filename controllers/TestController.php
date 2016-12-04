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
            'data' => Test::showAll(),
        ]);
    }

    public function actionView($id){

        return $this->render('view', [
            'data' => Test::showOne($id)
        ]);
    }

    public function actionCreate(){

        $new = Test::createData();

        if ($new->load(\Yii::$app->request->post()) && $new->save()){
            return $this->redirect(['view',
                'id' => $new->id
            ]);
        }
        else{
            return $this->render('insert', [
                'data' => $new
            ]);
        }
    }

    public function actionEdit($id){

        $edit = Test::editData($id);

        if ($edit->load(\Yii::$app->request->post()) && $edit->save()){
            return $this->redirect(['view',
                'id' => $edit->id
            ]);
        }
        else{
            return $this->render('edit', [
                'data' => $edit
            ]);
        }
    }

    public function actionDelete($id){

            Test::findOne($id)->delete();
            return $this->redirect(['index']);
    }

}