<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;
use app\models\DevShemas;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\UsersShema */
/* @var $form ActiveForm */
?>
<div class="custominsert">

    <?php 
         $form = ActiveForm::begin();

        $users = User::find()->all();
        $items = ArrayHelper::map($users, 'username', 'username');
        $params = [
            'prompt' => 'Укажите пользователя'
        ];
        echo $form->field($model, 'user_name')->dropDownList($items, $params);
    ?>
    <?php
        $shemas = DevShemas::find()->all();;
        $items = ArrayHelper::map($shemas, 'name', 'name');
        $params = [
            'prompt' => 'Укажите схему'
        ];
        echo $form->field($model, 'shema_name')->dropDownList($items, $params);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- custominsert -->