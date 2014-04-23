<div class="users view">
	
	<div class= "row">
		<div class="col-lg-1">
		</div>
		<div class ="col-lg-2"></div>
		<div class="col-lg-6"><br /><br />
			<div class="panel panel-warning">
				<div class="panel-heading"><h2 class="text-center">Members Information and Posts Data</h2></div>
				<div class="panel-body">
					<dl class="dl-horizontal">
						<dt><?php echo __('Id'); ?></dt>
						<dd><?php echo h($user['User']['id']); ?> &nbsp;</dd>
						
						<dt><?php echo __('Username'); ?></dt>
						<dd><?php echo h($user['User']['username']); ?>&nbsp;</dd>
						
						<dt><?php echo __('Password'); ?></dt>
						<dd><?php echo h($user['User']['password']); ?>&nbsp;</dd>
						<dt><?php echo __('Role'); ?></dt>
						<dd><?php echo h($user['User']['role']); ?>&nbsp;</dd>
				
						<dt><?php echo __('# of Posts '); ?></dt>
						<dd><?php echo __(count($user['Post'])); ?></dd>
						<dt><?php echo __('Created'); ?></dt>
						<dd><?php echo h($user['User']['created']); ?>&nbsp;</dd>
						<dt><?php echo __('Modified'); ?></dt>
						<dd><?php echo h($user['User']['modified']); ?>&nbsp;</dd>
						
						<dt><?php echo __('Posts Titles'); ?></dt>
						<dd ><?php for ($x= 0; $x< count($user['Post']); $x++){
								echo $this->Html->link(($user['Post'][$x]['title']),
								array('controller'=> 'Posts','action' => 'view', $user['Post'][$x]['id']));
								echo __("<br />");
								//echo __('Created '.h($user['Post'][$x]['created']));
								echo __("</br><br />" );
								}
							?>
						</dd>
					</dl>
					
					<div class="btn-toolbar text-center" role="toolbar">
						<button type="button" class="btn btn-info">
							<?php echo $this->Html->link('Back', array('controller' => 'posts', 'action' => 'index')); ?>
						</button>						
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>

