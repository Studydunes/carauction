
<!DOCTYPE html>
<html>
<head>
  <!-- <?= $this->Html->css('base.css') ?> --> 
  <?= $this->Html->css('bootstrap.min.css')?>
    <style>
    * {box-sizing: border-box;}
    { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

   </style> 
   <!-- <?= $this->Html->css('bootstrap.min.css')?> -->
</head>
<body>
    <header>
        <div class="header">
  <a href="#default" class="logo">CAROBAR</a>
  <div class="header-right">
    <?php
            echo $this->Html->link(
    'Home',
    '/Cars/home',
    ['class' => 'active']
);

     echo $this->Html->link(
    'Sell',
    '/Cars/sell',
    ['class' => 'active']
);
echo $this->Html->link(
    'Buy',
    '/Cars/buy',
    ['class' => 'active']
);
echo $this->Html->link(
    'cars',
    '/Cars/details',
    ['class' => 'active']
);



?>
    
  </div>
</div>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
