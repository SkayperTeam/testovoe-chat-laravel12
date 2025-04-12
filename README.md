# 📬 Laravel Chat API

Проект реализует REST API для системы чатов и сообщений с упором на производительность при большом объёме данных.

## 🧰 Стек технологий

- Laravel 12
- MySQL
- Docker (Laravel Sail)

---

## 🚀 Запуск

### 1. Клонировать репозиторий

```bash
git clone git@github.com:SkayperTeam/testovoe-chat-laravel12.git
cd testovoe-chat-laravel12
```
### 2. Скопировать .env
```bash
cp .env.example .env
```
### 3. Установить зависимости
```bash
composer i
```
### 4. Поднять контейнеры
```bash
docker-compose up --build -d
```
### 5. Сгенерировать ключ приложения
```bash
docker-compose exec laravel.test php artisan migrate --seed
```
### 6. Запустить миграции и сидеры
```bash
docker-compose exec laravel.test php artisan migrate --seed
```
### 6. Перейти по ссылке
```bash
http://localhost:8080
```
# Важно!!!

В любом другом случае я рекомендовал бы следовать документации и использовать /vendor/bin/sail или созданный алиас, но в данном ридми описал всё через docker-compose т.к. это требование тестового задания и хоть в нём разрешено использование sail, оно не исключало требования к использованию docker-compose


