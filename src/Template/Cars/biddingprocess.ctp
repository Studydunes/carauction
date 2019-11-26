<?php $this->layout = 'carlayout'; ?>
<h2>Bidding process</h2>

<?php

    echo $this->Form->create($bid);
     // echo $this->Form->create($cars);
    echo $this->Form->input('amount');
    ?>
    
<h2>Buyers detail</h2>
    <?php
    echo $this->Form->input('buyer.name');
    echo $this->Form->input('buyer.phone');
    echo $this->Form->input('buyer.gmail');
    echo $this->Form->button(__('Save detail'));    
    echo $this->Form->end();
?>













