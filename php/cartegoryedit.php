<?php
include "header.php";
include "slider.php";
include "class/caregory_class.php";
?>
<?php
$cartegory = new cartegory;
if(isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL){
    echo "<script>window.location = 'cartegorylist.php'</script>" ;

}
else{
    $cartegory_id = $_GET['cartegory_id'];
}
    $get_cartegory = $cartegory -> get_cartegory($cartegory_id);
    if($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
/*
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartgory_name= $_POST['cartgory_name'];
    $insert_cartegory = $cartgory ->insert_cartegory($cartgory_name);
}
*/?>


<?php

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartgory_name= $_POST['cartgory_name'];
    $update_cartegory = $cartgory ->update_cartegory($cartgory_name, $cartgory_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm danh mục</h1>
                <form action=""method="POST">
                    <input required name="cartgory_name" type="text" placeholder="Nhập tên danh mục" 
                    value= "<?php echo $result['cartegory_name'] ?>">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>