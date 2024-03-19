# для запуска на встроенном PHP-сервере в директории проекта запустить команду:
```
php -S localhost:8080 -t web
```
После можно перейти по адресу ```http://localhost:8080```
Где 8080 - порт, на котором поднялся сервер

# При выкладывании на хостинг Timeweb
1. Создаём аккаунт
2. Включаем SSH-консоль
3. Клонируем репозиторий:
```
git clone https://github.com/lap-a-toon/php-heroku-template-simple-master.git
```
4. Удаляем каталог public_html
```
rm -rf public_html
```
5. Создаём символьную ссылку на каталог web в проекте вместо public_html:
```
ln -s php-heroku-template-simple-master/web public_html
```
6. Переходим в раздел "Сайты"
7. Кликаем по ссылке основного проекта
8. Созерцаем работающую страницу