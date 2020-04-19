 
  <style>
 .section_cart .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
 .section_cart .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
 .fade:not(.show) {
    opacity: 1!important;
        background: rgba(0, 0, 0, 0.5)!important;
}
.modal-body{   
  background: #ffff;
             }
  </style>
       <?php include 'layout/css/style_min.php';?>

<section class="section_cart">
  

  <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>

  <button type="addNewProduct" name="addNewProduct" id="addNewProduct">Add New Product</button>

  <div class="row">
    <div class="col-md-3 text-center">
      <img src="layout/cart/images/img_1.png" width="150px" height="150px">
      <br>
      product 1 - <strong>$10</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="10" data-quantity="1" data-image="layout/cart/images/img_1.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="layout/cart/images/img_2.png" width="150px" height="150px">
      <br>
      product 2 - <strong>$20</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="2" data-name="product 2" data-summary="summary 2" data-price="20" data-quantity="1" data-image="layout/cart/images/img_2.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="layout/cart/images/img_3.png" width="150px" height="150px">
      <br>
      product 3 - <strong>$30</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="3" data-name="product 3" data-summary="summary 3" data-price="30" data-quantity="1" data-image="layout/cart/images/img_3.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="layout/cart/images/img_4.png" width="150px" height="150px">
      <br>
      product 4 - <strong>$40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="4" data-name="product 4" data-summary="summary 4" data-price="40" data-quantity="1" data-image="layout/cart/images/img_4.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="layout/cart/images/img_5.png" width="150px" height="150px">
      <br>
      product 5 - <strong>$50</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="5" data-name="product 5" data-summary="summary 5" data-price="50" data-quantity="1" data-image="layout/cart/images/img_5.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

  </div>


   <script type='text/javascript' src="layout/cart/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="layout/cart/js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      cartItems: [
        {id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'layout/cart/images/img_1.png'},
        {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'layout/cart/images/img_2.png'},
        {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'layout/cart/images/img_3.png'}
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
      }
    });

    $("#addNewProduct").click(function(event) {
      var currentElementNo = $(".row").children().length + 1;
      $(".row").append('<div class="col-md-3 text-center"><img src="layout/cart/images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="layout/cart/images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });
  });
  </script>

 

</section>