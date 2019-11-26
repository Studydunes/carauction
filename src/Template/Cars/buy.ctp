
<div class="row">
<div class="panel panel-primary">
    <div class="panel-heading">BUY CAR</div>
    <div class="panel-body">
      <table class="table">
    <thead>
      <tr>
        <th>SR NO</th>
        <th>SELECT CAR</th>
        <th>Action</th>
         </tr>
    </thead>
    <tbody>
      <?php
      $count=1;
      foreach($cars as $Key=>$car){
        ?>
         <tr>
        <td><?=$count++?></td>
          <!-- <td><?=$car->image?></td> -->
        <td><?php echo $this->Html->image($car->image, array('alt' => 'car image'));
        ?>
        </td>
        <td>
           <?php
            echo $this->Html->link(
    'Bid Now',
    '/Cars/description/'.$car->id,
    ['class' => 'active']
);
?>
          
        </td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
    </div>
  </div>
</div>