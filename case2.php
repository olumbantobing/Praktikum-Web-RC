<?php
    $data= array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "bambang", "pemweb", "waw");
    
    function arr($data){
        for($i = 0; $i < count($data); $i++){
            if($i != count($data) - 1){
                echo "$data[$i], ";
            }
            else{
                echo "$data[$i].";
            }
        }
    }

    function sorting($data){
        sort($data);
        for($i = 0; $i < count($data); $i++){
            echo "$data[$i]<br>";
        }
    }

    echo "10 Data Acak = ";
    arr($data);
    echo "<br><br>";
    echo "10 Data Terurut :<br>";
    sorting($data);  
?>