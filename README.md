# Router
Router PHP via AltoRouter

# Please edit the .htaccess

```RewriteEngine on
RewriteCond% {REQUEST_FILENAME}! -F
RewriteCond% {REQUEST_FILENAME}! -D
RewriteRule ^ (. *) $ Router.php? Path = $ 1 [NC, L, QSA]
```

Add route:

Example:

```
POST $router->map('GET|POST', 'order/payment/', 'order', 'order_payment');
```
```
GET $router->map('GET', '/', 'home/index', 'index');
```
```
GET $router->map('GET', '/', 'order/payment/[i:id]', 'order_payment_id');
```
