# Docker Compose

## Introduction
Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your application’s services. Then, with a single command, you create and start all the services from your configuration. 

## Install compose

```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod 777 /usr/local/bin/docker-compose
```

- Verify the installation
```bash
docker-compose --version
```


---
[Home](/README.md) | [Back](../README.md)