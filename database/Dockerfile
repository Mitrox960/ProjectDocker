ARG POSTGRES_VERSION

FROM postgres:${POSTGRES_VERSION}

COPY gestion_produits.sql /docker-entrypoint-initdb.d/gestion_produits.sql

ENV POSTGRES_PASSWORD=root

EXPOSE 5432
