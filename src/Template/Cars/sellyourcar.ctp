
<form action="../post"   method="post" enctype="multipart/form-data" >
<?php
    echo $this->Form->create($car);
    echo $this->Form->input('name');
    echo $this->Form->input('color');
    echo $this->Form->input('mileage');
    echo $this->Form->input('description', ['rows' => '4']);
    echo $this->Form->button(__('Save Car'));
    echo $this->Form->end();
?>

