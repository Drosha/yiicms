<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title>Admin Home Page</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="assets/styles.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<script src="vendors/jquery-1.9.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/scripts.js"></script>
	<?php $this->head() ?>
</head>

<body>

<?php
NavBar::begin([
	'brandLabel' => 'My Company',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-fixed-top',
	],
]);
$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
?>
<!--
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="#">Admin Panel</a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#">
							<i class="icon-user"></i> Vincent Gabriel
						</a>
					</li>
				</ul>
				<ul class="nav">
					<li class="active">
						<a href="#">Dashboard</a>
					</li>
					<li class="dropdown">
						<a href="#">Settings</a>
					</li>
					<li class="dropdown">
						<a href="#">Content</a>
					</li>
					<li class="dropdown">
						<a href="#">Users</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>
-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3" id="sidebar">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class="active">
					<a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
				</li>
				<li>
					<a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
				</li>
				<li>
					<a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
				</li>
			</ul>
		</div>

		<!--/span-->
		<div class="span9" id="content">
			<div class="row-fluid">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="breadcrumb">
							<i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
							<i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
							<li>
								<a href="#">Dashboard</a> <span class="divider">/</span>
							</li>
							<li>
								<a href="#">Settings</a> <span class="divider">/</span>
							</li>
							<li class="active">Tools</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<?= $content ?>
			</div>
		</div>
	</div>
</div>
<!--/.fluid-container-->
</body>

</html>