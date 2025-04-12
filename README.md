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
### 5. Установить зависимости и запустить миграции + сидеры
```bash
docker-compose exec laravel.test php artisan key:generate
docker-compose exec laravel.test php artisan migrate --seed
```
### 6. Перейти по ссылке
```bash
http://localhost:8080
```


