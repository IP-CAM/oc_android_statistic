This extension provides a webservice solution to get sales and orders statistic. 
It is useful when you develop for example mobile applications or you need to get real other webshop information. You can implements other webservices with it.

The Vqmod script allows to install the extension without modify the core Opencart webshop directly.

1. In the android application set up the username/password/service
variables. The service variables should contain the route of the service. For example: service/statistic
2. Post the variables to the opencart login url: http://<OPENCART>/admin/index.php?route=common/login
3. When the authentication was success the xml data came back
4. In the android app process the xml and show the content
5. I encoded the username/password in my android app but it is not so
secure, but better than simply using plain text.

It is only a demonstration how to interact with an Android mobile application.
