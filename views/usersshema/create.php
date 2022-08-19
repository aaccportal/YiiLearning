<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersShema */

$this->title = 'Create Users Shema';
$this->params['breadcrumbs'][] = ['label' => 'Users Shemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-shema-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
