 <div id="cart">
        <img src="img/cart.png">
           <?php
             if (isset($_SESSION["cantidadTotal"]))
                 {
             ?>
                <p>&nbsp; total: <?php echo $_SESSION["cantidadTotal"]; ?></p>
                <p>&nbsp; Bs     <?php echo $_SESSION["totalcoste"]; ?></p>
             <?php
                }else{
             ?>
                <p>&nbsp; total: 0</p>
                <p>&nbsp; Bs     0</p>
          <?php } ?>
</div>