<?php
    foreach($dsct as $ct){
        echo '
<div>
    <ul>
        <li>
            <h2>Gio Di</h2>
            <p>'.$ct['gio_di'].'</p>
            
        </li>

        <li>
            <h2>Gio Den</h2>
           <p>'.$ct['gio_den'].'</p>
            
        </li>

        <li>
            <h2>Diem Di</h2>
             <p>'.$ct['diem_di'].'</p>
        </li>

        <li>
            <h2>Diem Den</h2>
             <p>'.$ct['diem_den'].'</p>
        </li>
    </ul>

</div>';

    }
    

?>