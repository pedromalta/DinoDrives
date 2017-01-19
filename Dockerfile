FROM bazaglia/nginx-php
MANTAINER Pedro Malta <pedromalta@gmail.com>

RUN apk add --update nano

ADD files /

CMD ["bash", "/start.sh"] 