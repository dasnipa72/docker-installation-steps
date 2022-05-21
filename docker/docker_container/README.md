# Docker Containers

A container is a standard unit of software that packages up code and all its dependencies so the application runs quickly and reliably from one computing environment to another.   
Container images become containers at runtime and in the case of Docker containers - images become containers when they run on Docker Engine. 


## Running docker container

```bash
docker run -p <host_port>:<container_port> -e <key>=value <image_name>:tag <commands>
```

Example:
Let's run a docker container using the previously created docker image [here](../building_image/README.md)

```bash
sudo docker run -p 8989:8989 demo_api:debug
```



## Other additional command

- Listing all the running docker container
```bash
docker container ls
```

- Shell access to a running container
```bash
sudo docker exec -it c16345278a02 /bin/sh
```

- Listing all the running & stopped docker container
```bash
docker container ls -a
```

- Removing a stopped container
```bash
sudo docker container rm <container id>
```


---
[Home](/README.md) | [Back](../README.md)