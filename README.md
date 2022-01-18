Framework simples PHP com MVC e rotas

Fiz esse framework PHP MVC para que seja de fácil uso para que iniciantes entendam como o MVC e rotas funcionam com sitemap dinâmico, elém de ter as principais configurações no .htaccess para ter uma url mais amigável.


Recomendável pra médios e pequenos projetos.
 

MVC, torna fácil a manutenção da sua aplicação
Router, retorna o conteúdo de acordo com a url
sitemap dinâmico de acordo com o banco de dados
 

ATENÇÃO:

O router não pega todos os parâmetros da url
Exemplo: 

Em ‘’https://website.net/post?p=2'' o router ira pegar apenas "website.net/post''.
O restante dos parâmetros url podem ser facilmente capturados criando uma classe em Controller usando  ex: $_GET["post"].
