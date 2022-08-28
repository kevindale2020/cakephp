<!-- <?=var_dump($colors)?> -->
  <h2>Posts</h2>
<!--this->Html->nestedList($languages)-->   
  <table class="table">
    <thead>
      <tr>
<!--         <th>Image</th> -->
        <th>Title</th>
        <th>Body</th>
        <th>Category</th>
        <th>Author</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach($posts as $post) { ?>
	      <tr>
	      <!--   <td><?= $this->Html->image($post['image'], ['alt' => 'myImage', 'height' => '100', 'width' => '100']); ?> -->
	        <td><?=$post['title']?></td>
	        <td><?=$post['body']?></td>
          <td><?=$post['category']?></td>
          <td><?=$post['author']?></td>
	        <!-- <td><a class="btn btn-primary" href="<?=$this->Url->build('/post/edit/'.$post['id'])?>">Details</a> -->
          <td><?= $this->Html->link('Edit', ['action' => 'edit', $post['id']], ['class' => 'btn btn-primary']); ?>&nbsp;<?= $this->Form->postLink('Delete', ['action' => 'delete', $post['id']], ['class' => 'btn btn-danger', 'confirm' => 'Are you sure you want to delete this post?']); ?></td>
	      </tr>
  		<?php } ?>
    </tbody>
  </table>

