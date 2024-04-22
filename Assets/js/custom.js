document.addEventListener('DOMContentLoaded', function() {
    var incrementBtns = document.querySelectorAll('.increment-btn');

    for (var i = 0; i < incrementBtns.length; i++) {
        incrementBtns[i].addEventListener('click', function(event) {
            event.preventDefault();

            var productData = this.closest('.product_data');
            var qtyInput = productData.querySelector('.input-qty');
            var qtyValue = parseInt(qtyInput.value, 10);
            qtyValue = isNaN(qtyValue) ? 0 : qtyValue;

            if (qtyValue < 100) {
                qtyValue++;
                qtyInput.value = qtyValue;
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var decrementBtns = document.querySelectorAll('.decrement-btn');

    for (var i = 0; i < decrementBtns.length; i++) {
        decrementBtns[i].addEventListener('click', function(event) {
            event.preventDefault();

            var productData = this.closest('.product_data');
            var qtyInput = productData.querySelector('.input-qty');
            var qtyValue = parseInt(qtyInput.value, 10);
            qtyValue = isNaN(qtyValue) ? 0 : qtyValue;

            if (qtyValue > 1) {
                qtyValue--;
                qtyInput.value = qtyValue;
            }
        });
    }
});

var addToCartBtns = document.querySelectorAll('.addToCartBtn');

for (var i = 0; i < addToCartBtns.length; i++) {
    addToCartBtns[i].addEventListener('click', function(event) {
        event.preventDefault();

        var productData = this.closest('.product_data');
        var qtyInput = productData.querySelector('.input-qty');
        var qty = qtyInput.value;
        var prod_id = this.value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'functions/handlecart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response == 201) {
                        alertify.success("Product added to Cart");
                    } else if (response == 401) {
                        alertify.success("Login to Continue");
                    } else if (response == 500) {
                        alertify.success("Something went Wrong");
                    }
                }
            }
        };

        var params = "prod_id=" + encodeURIComponent(prod_id) + "&prod_qty=" + encodeURIComponent(qty) + "&scope=add";
        xhr.send(params);
    });



    
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('deleteItem')) {
            var cart_id = event.target.value;
    
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'functions/handlecart.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        if (response == 201) {
                            alertify.success("Item Deleted Successfully");
                        } else {
                            alertify.success(response);
                        }
                    }
                }
            };
    
            var params = "cart_id=" + encodeURIComponent(cart_id) + "&scope=delete";
            xhr.send(params);
        }
    });
    
}

