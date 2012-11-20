<?php if(!empty($restricted)) exit();

return array(
    
    /**
    URL to where index.php is, something like http://site.com or http://localhost */
    'url' => 'http://localhost/noof',
    
    /**
    Always rename userdata.txt into something extremely hard to guess. 
    And then of course change this line so it would know what the file is. */
    'user_data_file' => 'noof/data/site/userdata.txt'
    
);
