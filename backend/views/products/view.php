<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'สินค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
th {
    text-align:right;
}
</style>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <center><img src="../web/uploads/photo/<?= $model->image; ?>" class="img-thumbnail" style="width:100%;" alt=""></center>
            </div>
            <div class="col-sm-8">
                <table class="table">
                    <tr>
                        <th scope="col" style="width:16.66%">ชื่อสินค้า :</th>
                        <td><?= $model->name; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">สี :</th>
                        <td><?= $model->color; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">รายละเอียด :</th>
                        <td><?= $model->detail; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm pull-right">
                <p>
                    <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'คุณค้องการลบสินค้า '.$model->name.' ใช้หรือไม่?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
        </div>
    </div>


</div>
