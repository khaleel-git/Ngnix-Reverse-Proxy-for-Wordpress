# Ngnix Reverse Proxy Wordpress Too many redirect solution:
## Delete this default block:

```
define('WP_HOME', 'http://example.com');
define('WP_SITEURL', 'http://example.com');
```

## Add the following block:

### Either this will work
```
define('FORCE_SSL_ADMIN', true);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}

### Or only Adding this line will work. 
$_SERVER['HTTPS'] = 'On';
```

## Adding both Blocks is recommended in most of the cases.
