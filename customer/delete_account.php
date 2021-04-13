<center><!-- center Begin -->
    
    <h1> Bạn có thực sự muốn xóa ? </h1>
    
    <form action="" method="post"><!-- form Begin -->
        
       <input type="submit" name="Có" value="tôi muốn xóa" class="btn btn-danger"> 
        
       <input type="submit" name="Không" value="tôi không muốn xóa" class="btn btn-primary"> 
        
    </form><!-- form Finish -->
    
</center><!-- center Finish -->


<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Có'])){
    
    $delete_customer = "delete from customers where customer_email='$c_email'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Xóa thành công')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['Không'])){
    
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    
}

?>