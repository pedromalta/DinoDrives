FROM bazaglia/nginx-php
MAINTAINER Pedro Malta <pedromalta@gmail.com>

RUN apk add --update nano

ADD files /

CMD ["bash", "/start.sh"] 