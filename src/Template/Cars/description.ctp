<!-- <p> color </p>
<h1>
<?php 
echo $cars->color;
?>
</h1>
 -->
 <div class="panel panel-primary">
    <div class="panel-heading"><h4>ABOUT CAR</h4></div>
    <div class="panel-body">
 <table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>name</th>
        <th>id</th>
        <th>color</th>
        <th>description</th>
        <th>mileage</th>
        <th>min bid</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>      
      <tr class="info">
        <td><?php echo $this->Html->image($cars->image, array('alt' => 'car image'));
        ?>
        </td>
      	<td><?php echo $cars->name;?></td>
        <td><?php echo $cars->id;?></td>
        <td><?php echo $cars->color?></td>
        <td><?php echo $cars->description?></td>
        <td><?php echo $cars->mileage?></td>
        <!--  <td><?php echo $this->Html->image($cars->image, array('alt' => 'car image'));
        ?> 
        </td> -->
        <td><?php echo $cars->minbid?></td>
        <td> <?php
            echo $this->Html->link(
    'sure',
    '/Cars/biddingprocess/'.$cars->id,
    ['class' => 'active']
);
?>
<br>
<?php
            echo $this->Html->link(
    'Not sure',
    '/Cars/home',
    ['class' => 'active']
);
?>


</td>
      </tr>   
    </tbody>
  </table>
    </div>
  </div>












