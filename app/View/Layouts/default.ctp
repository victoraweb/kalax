<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Kalax');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('script');
	    echo $this->Bootstrap->load();

	?>
</head>
<body>
	<div id="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<?php echo $this->Html->link(__('Kalax Computer Systems - Admin'), array('controller' => 'services', 'action' => 'index'), array('class' => 'brand')) ?>
				<ul class="nav">
					<?php if (AuthComponent::user()): ?>
						<li><?php echo $this->Html->link(__('Services'), array('controller' => 'services', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
					<?php endif; ?>
					<li>
						<?php 
							if (AuthComponent::user()) {
								echo '<strong>Hello, ' . AuthComponent::user('username') . '</strong>';
								echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); 
							} 
						?>
						<?php if (!AuthComponent::user()) echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?>
					</li>
				</ul>


			</div>
		</div>
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
