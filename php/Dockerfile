# 公式配布イメージを使用する。（php7.4.3 apache2.4.38）
FROM php:7.4.3-apache

# 設定ファイルをコンテナに配置する。
COPY ./php.ini /usr/local/etc/php/
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# PDO PostgreSQL 拡張
RUN apt-get update && \
  apt-get install -y libpq-dev &&\
  docker-php-ext-install pdo_pgsql

# ドキュメントルートを変更する。
ENV APACHE_DOCUMENT_ROOT='/var/www/html/public/'
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# mod_rewriteを有効化する。（Laravelのルーティング機能に必要。）
RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load

