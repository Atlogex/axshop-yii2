<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
	<h1>Orders</h1>
	<ul>
		<?php foreach ($orders as $order): ?>
			<li>
				<?= Html::encode("{$order->name} ({$order->code})") ?>:
				<?= $order->population ?>
			</li>
		<?php endforeach; ?>
	</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>