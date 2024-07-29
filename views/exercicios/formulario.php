<?php
use \yii\widgets\ActiveForm;
use \yii\helpers\Html;
?>

<h2>Formulario de cadastro</h2>
<hr>

<?php  $form = ActiveForm::begin()    ?>
<?= $form->field ( $model, 'nome')  ?>
<?= $form->field ( $model, 'email')  ?>
<?= $form->field ( $model, 'idade')  ?>
<div class="form-group">
    <?= Html::submitButton('Enviar dados',['class'=>'btn btn-primary'])?>
</div>

<?php $form = ActiveForm::end() ?>
