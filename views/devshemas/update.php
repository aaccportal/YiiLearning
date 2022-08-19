<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DevShemas */

$this->title = 'Update Dev Shemas: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dev Shemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'shema_id' => $model->shema_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dev-shemas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
