FROM nginx:1.10-alpine

ADD ./config/prod.nginx.conf /etc/nginx/conf.d/default.conf
