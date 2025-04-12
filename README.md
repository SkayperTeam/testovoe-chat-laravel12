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
git clone https://github.com/your-username/chat-api.git
cd chat-api
```
### 2. Скопировать .env
```bash
cp .env.example .env
```
### 3. Поднять контейнеры
```bash
docker-compose up -d
```
### 4. Установить зависимости и запустить миграции + сидеры
```bash
docker-compose exec laravel.test composer install
docker-compose exec laravel.test php artisan key:generate
docker-compose exec laravel.test php artisan migrate --seed
```
### 5. Перейти по ссылке
```bash
http://localhost:8080
```


