<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สินค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มสินค้า', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], // vendor\yiisoft\yii2\grid\SerialColumn

            //'id',
            'name',
            'color',
            //'detail:ntext',
            'image',

            ['class' => 'yii\grid\ActionColumn'], // vendor\yiisoft\yii2\grid\ActionColumn
        ],
    ]); ?>

    <?php Pjax::end(); ?>











    <table class="table">
        <thead>
            <tr>
                <th scope="col">ชื่อสินค้า :</th>
                <th scope="col">สี :</th>
                <th scope="col">รูปภาพ :</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = (new \yii\db\Query())
            ->select(['*'])
            ->from('products')->all();

        foreach ($query as $row) {
        ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['color']; ?></td>
                <td><?= $row['image']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>



</div>
