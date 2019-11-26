
<?php $this->layout = 'carlayout'; ?>
<h2>Car detail</h2>
<?php
    // echo $this->Form->create($car)
    echo $this->Form->create($car,array('type' => 'file'));
    echo $this->Form->input('name');
    echo $this->Form->input('color');
    echo $this->Form->input('mileage');
    echo $this->Form->input('minbid');
    echo $this->Form->input('description', ['rows' => '2']);
    echo $this->Form->file('image',[ "class" => "form-control"]);
    echo $this->Form->input('sdt',['type'=>'datetime-local']);
    echo $this->Form->input('edt',['type'=>'datetime-local']);

    ?>
<h2>user detail</h2>
    <?php
    echo $this->Form->input('user.name');
    echo $this->Form->input('user.phone');
    echo $this->Form->input('user.email');
    echo $this->Form->button(__('Save detail'));
    echo $this->Form->end();
?>


