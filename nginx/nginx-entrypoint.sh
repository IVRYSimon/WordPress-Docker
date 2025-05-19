#!/bin/sh

TEMPLATE_DIR=/etc/nginx/templates
CONF_FILE=/etc/nginx/conf.d/wp.conf

if [ "$ENABLE_SSL" = "true" ]; then
    echo "Using SSL template"
    envsubst '${DOMAIN}' < $TEMPLATE_DIR/wp.ssl.conf.template > $CONF_FILE
else
    echo "Using non-SSL template"
    envsubst '${DOMAIN}' < $TEMPLATE_DIR/wp.nossl.conf.template > $CONF_FILE
fi

exec nginx -g "daemon off;"
