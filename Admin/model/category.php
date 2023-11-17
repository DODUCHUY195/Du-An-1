<?php
function load_all_cg(){
    $query="SELECT * FROM loaive";
    return pdo_query($query);
}
?>