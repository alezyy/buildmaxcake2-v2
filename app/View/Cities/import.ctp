<h3>Import Cities from CSV data file</h3>
<?php
    echo $this->Form->create('City', array('action' => 'import', 'type' => 'file') ); 
    echo $this->Form->input('CsvFile', array('label'=>'Import CSV','type'=>'file') );
    echo $this->Form->end('Submit');
?>
