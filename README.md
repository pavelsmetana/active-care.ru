## Этот проект заготовка для проектов на docker

### Для старта:

 * make init
 * ```NGINX_PORT=80```      ## указать нужный порт

В докер прокидывается вся папка

```/www/public``` - root директория (внутри docker)

Если нужна инициализация базы, то sql закинуть в ```docker/mysql/init```