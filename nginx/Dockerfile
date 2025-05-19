FROM nginx:alpine

RUN apk add --no-cache gettext

COPY templates /etc/nginx/templates/
COPY nginx-entrypoint.sh /docker-entrypoint.d/00-nginx-setup.sh
COPY nginx.conf /etc/nginx/nginx.conf

RUN chmod +x /docker-entrypoint.d/00-nginx-setup.sh
