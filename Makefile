up:
	docker compose up -d
down:
	docker compose down
php-bash:
	docker compose exec php-werewolf bash
php-logs:
	docker compose logs php-werewolf
nginx-bash:
	docker compose exec nginx-werewolf bash
nginx-logs:
	docker compose logs nginx-werewolf
vendor:
	docker compose exec php-werewolf bash -c "composer install"
migrate:
	docker compose exec php-werewolf bash -c "php artisan migrate:fresh"
seed:
	docker compose exec php-werewolf bash -c "php artisan db:seed"
install:
	@docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm i
npm-build:
	@docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm run build
npm-build-tsc:
	@docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm run build-tsc
npm-dev:
	@docker run -it --rm -v .:/app -w /app --user 1000:1000 -p 5173:5173 node:20.11.0 npm run dev
npm-lint:
	@docker run -it --rm -v .:/app -w /app --user 1000:1000  node:20.11.0 npm run lint

init:
	pwd
	cp ./.env.example ./.env
	docker compose up -d
	docker compose run --rm php-werewolf composer install
	docker compose exec php-werewolf bash -c "php artisan migrate"
	docker compose exec php-werewolf bash -c "php artisan db:seed"
	docker compose exec php-werewolf bash -c "php artisan key:generate"
	docker compose exec php-werewolf bash -c "php artisan l5-swagger:generate"
	docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm i
	docker run -it --rm -v .:/app -w /app --user 1000:1000 -p 5173:5173 node:20.11.0 npm run dev

phpcs:
	@docker run --rm -v .:/tools/app -u 1000 ghcr.io/aleksandrtm/php-tools phpcs
