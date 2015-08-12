# OAuth2.0 简易示例

## 程序部署
### 虚拟机环境部署

* hosts文件

```
127.0.0.1    client.oauth.org
127.0.0.1    server.oauth.org
```

* Apache配置文件

```
<VirtualHost *:80>
     DocumentRoot "D:/docroot/oauth/client"
     ServerName client.oauth.org
     <Directory "D:/www/oauth/client">
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
</VirtualHost>

<VirtualHost *:80>
     DocumentRoot "D:/docroot/oauth/server"
     ServerName server.oauth.org
     <Directory "D:/www/oauth/server">
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
</VirtualHost>
```

## 代码部署
```
oauth
  |-client  #客户端
  |-server  #服务端
```


## 相关连接

1. [oauth2-php](https://code.google.com/p/oauth2-php): https://code.google.com/p/oauth2-php

