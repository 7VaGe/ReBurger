// CARRELLO

var carrello = (function() {
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

  // Salvo il carrello
  function saveCart() {
    sessionStorage.setItem('carrello', JSON.stringify(cart));
  }

  // Carico carrello
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('carrello'));
  }
  if (sessionStorage.getItem("carrello") != null) {
    loadCart();
  }


  // Metodi

  var obj = {};

  // Aggiungi al carrello
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
  // Numero di un determinato prodotto
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Rimuovi una unità un determinato oggetto dal carrello
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

  // Svuota il carrello da uno specifico prodotto
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Svuota completamente il carrello
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Conta il numero di tutti i prodotti nel carrello
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Totale spesa
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



// Triggers / Eventi

// Aggiungi al carrello
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  carrello.addItemToCart(name, price, 1);
  displayCart();
});

// Svuota il carrello
$('.clear-cart').click(function() {
  carrello.clearCart();
  displayCart();
});

// Mosta carrello
function displayCart() {
  var cartArray = carrello.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>"
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-warning' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-warning input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = "
      + "<td>" + cartArray[i].total + "</td>"
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(carrello.totalCart());
  $('.total-count').html(carrello.totalCount());
}

// Tolgo un prodotto button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  carrello.removeItemFromCartAll(name);
  displayCart();
})


// -1 non funziona, la quantità rimane invariata
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  carrello.removeItemFromCart(name);
  displayCart();
})
// +1 da problemi quesrta funzione, genera un altra riga e assegna il valore NAN al prezzo, andando ad impallare il tutto
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  carrello.addItemToCart(name);
  displayCart();
})

// prodotto conta input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  carrello.setCountForItem(name, count);
  displayCart();
});

displayCart();
