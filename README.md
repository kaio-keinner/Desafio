<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Para rodar essa aplicação será nesscessario ter o docker já instalado na sua maquina.

1 - Primeiro, baixe o projeto para sua máquina:

```bash
    git clone git@github.com:kaio-keinner/Desafio.git
```

2 - Entre na raiz do projeto depois rode o seguinte comando:

```bash
    composer install
```

3 - Depois instale o laravel/sail:

```bash
    composer require laravel/sail --dev
```

4 - Renomeie o arquivo .env.example para .env.


5 - Após a instalação do Sail, você pode executar o comando Artisan. Este comando publicará o arquivo do Sail na raiz do projeto:

```bash
    php artisan sail:install
```
Caso ocorra algum erro nesta etapa, verifique se o arquivo .env está configurado corretamente:

```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
6 - Inicie o projeto, *atenção é nessesário que as portas 80, e 3306 estejam livres* 

```bash
.vendor/bin/sail up
```




