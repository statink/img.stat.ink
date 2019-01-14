CONFIGS := \
	config/secrets/cookie.php \
	config/secrets/img-s3.php

.PHONY: all
all: init

.PHONY: init
init: vendor $(CONFIGS)

vendor: composer.lock composer.phar
	COMPOSER_ALLOW_SUPERUSER=1 ./composer.phar install -vvv --prefer-dist

composer.lock: composer.json composer.phar
	COMPOSER_ALLOW_SUPERUSER=1 ./composer.phar update -vvv --prefer-dist

composer.json: composer.json5
	json5 -s 2 -o $@ $<

composer.phar:
	curl -fsSL 'https://getcomposer.org/installer' | php

config/secrets/cookie.php:
	./bin/create_cookie_secret > $@

config/secrets/img-s3.php:
	echo '<?php' > $@
	echo 'declare(strict_types=1);' >> $@
	echo '' >> $@
	echo 'return [' >> $@
	echo '];' >> $@

