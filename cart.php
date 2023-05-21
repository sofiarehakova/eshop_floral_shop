<?php

global $conn;

require_once('config.php');
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'
     AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'Product already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity)
        VALUES ('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')
        ") or die('query failed');
        $message[] = 'Product added to cart!';
    }

};

if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = 
                                           '$update_id'") or die('query failed');
    $message[] = 'Cart quantity updated!';
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id' ") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Shopping Cart</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="templatemo_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/orman.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">

        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/

    </script>

    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

        function clearText(field) {
            if (field.defaultValue === field.value) field.value = '';
            else if (field.value === '') field.value = field.defaultValue;
        }

    </script>


</head>

<body>

<div id="templatemo_wrapper_sp">
    <div id="templatemo_header_wsp">
        <div id="templatemo_header" class="header_subpage">
            <?php include_once "parts/body_header.php"; ?>
        </div> <!-- end of templatemo_menu -->

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->

<?php

if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message" onclick="this.remove()">' . $message . '</div>';
    }
}
?>

<div class="container">
    <div class="user-profile">

        <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select_user) > 0) {
            $fetch_user = mysqli_fetch_assoc($select_user);
        }
        ?>

        <p> username: <span><?php echo $fetch_user['name']; ?></span></p>
        <p> email: <span><?php echo $fetch_user['email']; ?></span></p>
        <div class="flex">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
            <a href="cart.php?logout=<?php echo $user_id; ?>"
               onclick="return confirm('Are your sure you want to logout?');"
               class="delete-btn">LogOut</a>
        </div>

    </div>

    <div class="products">
        <h1 class="heading">Latest products</h1>
        <div class="box-container">
            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `productdb` ") or die('query failed');
            if (mysqli_num_rows($select_product) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_product)) {
                    ?>
                    <form method="post" class="box" action="">
                        <img src="<?php echo $fetch_product['product_image']; ?>">
                        <div class="name"><?php echo $fetch_product['product_name']; ?></div>
                        <div class="price">€<?php echo $fetch_product['product_price']; ?>/-</div>
                        <input type="number" min="1" name="product_quantity" value="1">
                        <input type="hidden" name="product_image"
                               value="<?php echo $fetch_product['product_image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                        <input type="hidden" name="product_price"
                               value="<?php echo $fetch_product['product_price']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                    </form>
                    <?php
                };
            };
            ?>

        </div>
    </div>
    <div class="shopping-cart">

        <h1 class="heading">Shopping cart</h1>

        <table>
            <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            $grand_total = 0;
            $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id' 
            ") or die('query failed');
            if (mysqli_num_rows($cart_query) > 0) {
                while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                    ?>
                    <tr>
                        <td><img src="<?php echo $fetch_cart['image']; ?>" height="100" alt=""/></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td>€<?php echo $fetch_cart['price']; ?>/-</td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                <input type="number" min="1" name="cart_quantity"
                                       value="<?php echo $fetch_cart['quantity']; ?>">
                                <input type="submit" name="update_cart" value="update" class="option-btn">
                            </form>
                        </td>
                        <td>€<?php echo $sub_total = number_format($fetch_cart['price'] *
                                $fetch_cart['quantity']); ?>/-
                        </td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"
                               onclick="return confirm('Remove item from cart?');">Remove</a></td>
                    </tr>
                    <?php
                    $grand_total += $sub_total;
                };
            } else {
                echo '<tr><td style = "padding: 20px; text-transform:capitalize; "colspan="6">no item added</td></tr>';
            }

            ?>
            <tr class="table-bottom">
                <td colspan="4">Grand total</td>
                <td>€<?php echo $grand_total; ?>/-</td>
                <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?')
                ;" class="delete-btn">Delete all</a></td>
            </tr>
            </tbody>
        </table>

        <div class="cart-btn">
            <a href="#" class="btn">proceed to checkout</a>
        </div>

    </div>
</div>


<?php include_once "parts/body_footer.php"; ?>
</body>
</html>