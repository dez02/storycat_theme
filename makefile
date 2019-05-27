.PHONY: start stop restart

start:
	docker-compose up --build -d

stop:
	docker-compose down

restart: stop start

update:
	git pull
	make restart