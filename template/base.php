<!DOCTYPE html>
<html lang="it">
    <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="css/styleSmartphone.css"><!--<link id="css_link" rel="stylesheet" type="text/css" href="css/styleSmartphone.css" /> -->
            <!--
            il percorso cambia se si utilizza mac os o windows, mac necessita di accedere alla cartella padre
            "../path" window invece entra direttamente. -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://kit.fontawesome.com/c62994c39a.js" crossorigin="anonymous"></script>

        <title>ReBurger</title>
    </head>
<body class="bg-dark">
<?php include 'cookie.php'; ?>
<header class="bg-dark text-white d-block">
<?php include 'header.php'; ?>
</header>
<div class="container-lg col-12 my-2 d-lg-none d-sm-block bg-dark">
    <div class="row mx-4 p-2 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
      <div class="col-lg-7 p-1 p-lg-5 pt-lg-3">
          <div class="py-5 text-center col-12 d-grid gap-2 d-md-flex justify-content-md-center d-md-none">
            <?php if (isset($_SESSION["username"])) { ?>
              <button type="button" class="btn btn-outline-light" onclick='window.location="index.php?logout=1"'>LOGOUT</button>
            <?php }else{ ?>
            <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
            <button type="button" class="btn btn-warning" onclick='window.location="signup.php"'>Sign-up</button>
            <?php } ?>
            </div>
        </div>
     </div>
</div>

<main>
  <?php
      if(isset($templateParams["nome"])){
          require($templateParams["nome"]);}
  ?>
</main>


<button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top"><i class="bi bi-arrow-up"></i></button>



<!-- Javascript-->
        <script src="script/cookies.js"></script>
        <script src="script/script.js"></script>

<!-- footer qui -->

<div class="container-md justify-content-center">

<?php include 'footer.php' ?>
</div>
</body>

<script>

     var shoppingCart = (function() {
       // =============================
       // Private methods and propeties
       // =============================
       cart = [];

       // Constructor
       function Item(name, price, count) {
         this.name = name;
         this.price = price;
         this.count = count;
       }

       // Save cart
       function saveCart() {
         sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
       }

         // Load cart
       function loadCart() {
         cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
       }
       if (sessionStorage.getItem("shoppingCart") != null) {
         loadCart();
       }


       // =============================
       // Public methods and propeties
       // =============================
       var obj = {};

       // Add to cart
       obj.addItemToCart = function(name, price, count) {
         for(var item in cart) {
           if(cart[item].name === name) {
             cart[item].count ++;
             saveCart();
             return;
           }
         }
         var item = new Item(name, price, count);
         cart.push(item);
         saveCart();
       }
       // Set count from item
       obj.setCountForItem = function(name, count) {
         for(var i in cart) {
           if (cart[i].name === name) {
             cart[i].count = count;
             break;
           }
         }
       };
       // Remove item from cart
       obj.removeItemFromCart = function(name) {
           for(var item in cart) {
             if(cart[item].name === name) {
               cart[item].count --;
               if(cart[item].count === 0) {
                 cart.splice(item, 1);
               }
               break;
             }
         }
         saveCart();
       }

       // Remove all items from cart
       obj.removeItemFromCartAll = function(name) {
         for(var item in cart) {
           if(cart[item].name === name) {
             cart.splice(item, 1);
             break;
           }
         }
         saveCart();
       }

       // Clear cart
       obj.clearCart = function() {
         cart = [];
         saveCart();
       }

       // Count cart
       obj.totalCount = function() {
         var totalCount = 0;
         for(var item in cart) {
           totalCount += cart[item].count;
         }
         return totalCount;
       }

       // Total cart
       obj.totalCart = function() {
         var totalCart = 0;
         for(var item in cart) {
           totalCart += cart[item].price * cart[item].count;
         }
         return Number(totalCart.toFixed(2));
       }

       // List cart
       obj.listCart = function() {
         var cartCopy = [];
         for(i in cart) {
           item = cart[i];
           itemCopy = {};
           for(p in item) {
             itemCopy[p] = item[p];

           }
           itemCopy.total = Number(item.price * item.count).toFixed(2);
           cartCopy.push(itemCopy)
         }
         return cartCopy;
       }

       // cart : Array
       // Item : Object/Class
       // addItemToCart : Function
       // removeItemFromCart : Function
       // removeItemFromCartAll : Function
       // clearCart : Function
       // countCart : Function
       // totalCart : Function
       // listCart : Function
       // saveCart : Function
       // loadCart : Function
       return obj;
     })();


     // *****************************************
     // Triggers / Events
     // *****************************************
     // Add item
     $('.add-to-cart').click(function(event) {
       event.preventDefault();
       var name = $(this).data('name');
       var price = Number($(this).data('price'));
       shoppingCart.addItemToCart(name, price, 1);
       displayCart();
     });

     // Clear items
     $('.clear-cart').click(function() {
       shoppingCart.clearCart();
       displayCart();
     });


     function displayCart() {
       var cartArray = shoppingCart.listCart();
       var output = "";
       for(var i in cartArray) {
         let nameProduct = cartArray[i].name.replace("_"," ");
         output += "<tr>"
           + "<td>" + nameProduct + "</td>"
           + "<td>(" + cartArray[i].price + ")</td>"
           + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
           + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
           + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
           + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
           + " = "
           + "<td>" + cartArray[i].total + "</td>"
           +  "</tr>";
       }
       $('.show-cart').html(output);
       $('.total-cart').html(shoppingCart.totalCart());
       $('.total-count').html(shoppingCart.totalCount());
     }

     // Delete item button

     $('.show-cart').on("click", ".delete-item", function(event) {
       var name = $(this).data('name')
       shoppingCart.removeItemFromCartAll(name);
       displayCart();
     })


     // -1
     $('.show-cart').on("click", ".minus-item", function(event) {
       var name = $(this).data('name')
       shoppingCart.removeItemFromCart(name);
       displayCart();
     })
     // +1
     $('.show-cart').on("click", ".plus-item", function(event) {
       var name = $(this).data('name')
       shoppingCart.addItemToCart(name);
       displayCart();
     })

     // Item count
     $('.show-cart').on("change", ".item-count", function(event) {
        var name = $(this).data('name');
        var count = Number($(this).val());
       shoppingCart.setCountForItem(name, count);
       displayCart();
     });

     displayCart();

</script>

</html>
