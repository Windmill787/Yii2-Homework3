<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.12.16
 * Time: 21:26
 */

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return 'test';
    }

    public static function output(){

        $test = Test::find()->all();
        return $test;
    }

    public static function insertData(){
        $new = new Test();
        $new->name = 'john';
        $new->save();
    }

    public static function editData(){
        $edit = Test::findOne(['name' => 'john']);
        $edit->name = 'mary';
        $edit->save();
    }

}