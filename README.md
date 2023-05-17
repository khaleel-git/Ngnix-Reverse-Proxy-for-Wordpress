# Ngnix Reverse Proxy Wordpress Too many redirect solution:
## Delete this default block:

```
define('WP_HOME', 'http://example.com');
define('WP_SITEURL', 'http://example.com');
```

## Add the following block:
```
define('FORCE_SSL_ADMIN', true);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}
$_SERVER['HTTPS'] = 'On';
```
