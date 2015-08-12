# OAuth2.0 ����ʾ��

## ������
### �������������

1. hosts�ļ�

`
127.0.0.1    client.oauth.org
127.0.0.1    server.oauth.org
`

2. Apache�����ļ�

`
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
`

### ���벿��

oauth
  |-client  #�ͻ���
  |-server  #�����

