
<div class="panel panel-primary">
    <div class="panel-heading">CAR DETAIL</div>
    <div class="panel-body">
      <table class="table">
    <thead>
      <tr>
        <th>CAR NAME</th>
        <th>Mileage</th>
        <th>Color</th>
        <th>Min Bid</th>
        <th>Description</th>
        <th>ID</th>
         </tr>
    </thead>
    <tbody>
         <tr>
        <td><?=$bids[0]["Cars"]["name"]?></td>
        <td><?=$bids[0]["Cars"]["mileage"]?></td>
        <td><?=$bids[0]["Cars"]["color"]?></td>
        <td><?=$bids[0]["Cars"]["minbid"]?></td>
        <td><?=$bids[0]["Cars"]["description"]?></td>
        <td><?=$bids[0]["Cars"]["id"]?></td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>



  <div class="panel panel-info">
    <div class="panel-heading">BUYERS  LIST</div>
    <div class="panel-body">
      <table class="table">
    <thead>
      <tr>
        <th>SR NO.</th>
        <th>Name</th>
        <th>Gmail</th>
        <th>Amount</th>
        <!-- <th>Amount</th> -->
         </tr>
    </thead>
    <tbody>
        <tbody>
      <?php
       $count=1;
      foreach($bids as $Key=>$bid){
        ?>
         <tr>
          <td><?=$count++?></td>
      
         <td><?php echo $bid["buyer"]["name"]?></td>  
         <td><?php echo $bid["buyer"]["gmail"]?></td> 
         <!-- <td><?php echo $bid["Bid"]["amount"]?></td> -->
         <td><?php echo $bid->amount?></td>
         
      
    </tr>
      <?php
    }
    ?>



    </tbody>
    </tbody>
  </table>
    </div>

  </div>

  
   <?php echo $this->Html->link(
    'Winner',
    '/Cars/winner/'.$bid->car_id,
    ['class' => 'active']
);
?>
  

 
 

