<?php

namespace app\controllers;

use app\models\CadastroModel;
use Yii;
use yii\web\Controller;

class ExerciciosController extends Controller
{
    public function actionFormulario(){
        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();

        if($cadastroModel->load($post) && $cadastroModel->validate()){
            return $this->render('formulario-confirmacao',['model'=>$cadastroModel]);
        }else{
            return $this->render('formulario',['model'=>$cadastroModel]);
        }


    }
}