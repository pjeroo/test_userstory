# Тестовое задание для Userstory

* выполнить ```composer install```
* настроить nginx, в нём установка языка в зависимости от домена ```(ru|en).userstory.develop```
* настроить mysql, затем выполнить ```yii migrate```

# Конфигурация nginx
```
server {
    listen       80;
    server_name  *.userstory.develop;

    error_log  /var/log/nginx/error.log warn;
    access_log  /var/log/nginx/access.log  main;

    root   [путь до web];

    location / {
        index  index.php index.html index.htm;
    }

    location ~ \.php$ {
        fastcgi_pass   [php-fpm ip];
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  [путь до fpm-web]$fastcgi_script_name;
        set $x_lang 'ru';

        if ($host ~* "^(ru|en)\.userstory\.develop$") {
            set $x_lang $1;
        }

        fastcgi_param X_LANG $x_lang;
        include        fastcgi_params;
    }
}
```