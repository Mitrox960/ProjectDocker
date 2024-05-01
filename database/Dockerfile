ARG MYSQL_VERSION

FROM mysql:${MYSQL_VERSION}

COPY gestion_produits.sql /docker-entrypoint-initdb.d/gestion_produits.sql

ENV MYSQL_ROOT_PASSWORD=root

EXPOSE 3306
