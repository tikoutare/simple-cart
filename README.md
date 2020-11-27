Simple-cart
===========

### Installation
`composer require simple-cart/cart`

### Example
```php
$cart = new SimpleCart\Cart([
    new Acme\Product()
]);

//total number of items in the cart
$cart->count(); //or count($cart)
```