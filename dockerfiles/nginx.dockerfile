FROM nginx
COPY ./conf /etc/nginx/conf.d
RUN mkdir -p /var/www/html