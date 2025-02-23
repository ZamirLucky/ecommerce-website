<?php
    function showMainImages($conn, $id){

        $output = '';
        $query = "SELECT * FROM products_tb WHERE id = $id";
        $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn)); // die if error occur in database query;
        
        while($row = mysqli_fetch_assoc($result)){
            $output = '<img src="'.$row['image'].'" alt="shoes" class="img-fluid jarallax-img">
                <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                <h2 class="card-title display-3 light">'.$row['name'].'</h2>
                <a href="index.html"
                    class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now
                </a>
                </div>
            ';
        }
        return $output;
    }
?>