<?php
function pr($arr){
    echo '<pre>';
    print_r($arr);
}
function prx($arr){
    echo '<pre>';
    print_r($arr);
    die ();
}
function get_safe_value($conn,$str){
    if($str!=''){
        $str=trim($str);
        return mysqli_real_escape_string($conn,$str);
    }
}

function is_Admin(){
    if($_SESSION['ADMIN_ROLE']==1){
        ?>
        <script>
            window.location.href='product.php';
        </script>
       
       <?php
    }
}

?>