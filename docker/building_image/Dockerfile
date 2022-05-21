FROM python:3.9.5-alpine3.13

WORKDIR /app/

ADD requirements.txt /requirements.txt

RUN pip3 install -r /requirements.txt

COPY src/ /app/

CMD ["python", "/app/api.py"]