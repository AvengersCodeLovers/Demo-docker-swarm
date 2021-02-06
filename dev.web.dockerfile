FROM nginx:1.10-alpine

ADD ./config/dev.nginx.conf /etc/nginx/conf.d/default.conf
