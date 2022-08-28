
<h3>Add Post</h3>
<div class="container mt-3">
	<div class="col-md-4">
<?= $this->Form->create($post); ?>
	<div class="mb-3">
		<?= $this->Form->label('Title'); ?>
		<?= $this->Form->input('title', array(
			'class' => 'form-control',
			'placeholder' => 'Enter Title'
		)); ?>
	</div>

	<div class="mb-3">
		<?= $this->Form->label('Body'); ?>
		<?= $this->Form->input('body', array(
			'class' => 'form-control',
			'placeholder' => 'Enter Body'
		)); ?>
	</div>

	<div class="mb-3">
		<?= $this->Form->label('Category'); ?>
		<?= $this->Form->input('category', array(
			'class' => 'form-control',
			'placeholder' => 'Enter Body',
			'empty' => 'Select One',
			'type' => 'select',
			'options' => array('Web Development' => 'Web Development', 'Design' => 'Design', 'Marketing' => 'Marketing', 'Mobile Development' => 'Mobile Development')
		)); ?>
	</div>

	<div class="mb-3">
		<?= $this->Form->label('Author'); ?>
		<?= $this->Form->input('author', array(
			'class' => 'form-control',
			'placeholder' => 'Enter Author'
		)); ?>
	</div>

	<?= $this->Form->submit('Submit', array(
		'class' => 'btn btn-primary'
	)); ?>
<?= $this->Form->end(); ?>
</div>
</div>