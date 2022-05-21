# Building Docker Image

- [Dockerfile](#dockerfile)
- [Docker image](#docker-image)
- [Docker Repository](#doc-repository)

## Dockerfile

Docker can build images automatically by reading the instructions from a Dockerfile. A Dockerfile is a text document that contains all the commands a user could call on the command line to assemble an image. Using docker build users can create an automated build that executes several command-line instructions in succession.

```bash
FROM python:3.9.5-alpine3.13
....
```
Example: [Dockerfile](./Dockerfile)

## Docker image
A Docker container image is a lightweight, standalone, executable package of software that includes everything needed to run an application: code, runtime, system tools, system libraries and settings.


The command to build a docker image:

```bash
sudo docker build -t <image_name>:<tag> -f <docker_file_path> <context>
```

- image_name: This is an image name you would want to provide while building a docker image
- tag: This is the tag you want to define to your docker image
- docker_file_path: This is to point out a docker file to provide a set of instructions to build a docker image, by default it will look for a file with a name `Dockerfile` in the current directory.
- context: This is the context for building the docker images from where the source files or any files required during the build of the docker image, example `.` for current directory.

E.g.
```bash
sudo docker build -t demo_api:debug .
```

- Viewing the image that you recently built
```bash
sudo docker images | grep demo_api
```

- Removing the image that you recently built
```bash
sudo docker rmi demo_api:debug
```

## Docker Repository
A Docker repository is where you can store 1 or more versions of a specific Docker image. An image can have 1 or more versions (tags).
A Docker image can be compared to a git repo. A git repo can be hosted inside of a GitHub repository, but it could also be hosted on Gitlab, BitBucket or your own git repo hosting service. It could also sit on your development box and not be hosted anywhere.  

The same goes for a Docker image. You can choose to not push it anywhere, but you could also push it to the Docker Hub which is both a public and private service for hosting Docker repositories. There are other third party repository hosting services too.  

The thing to remember here is a Docker repository is a place for you to publish and access your Docker images. Just like GitHub is a place for you to publish and access your git repos.  

It’s also worth pointing out that the Docker Hub and other third party repository hosting services are called “registries”. A registry stores a collection of repositories.  

You could say a registry has many repositories and a repository has many different versions of the same image which are individually versioned with tags.  

Examples of docker repositories:
- Docker hub
- ECR (Elastic Container Registery)
- GCR (Google Container Registery)*



## References
- [Docker Repository](https://nickjanetakis.com/blog/docker-tip-53-difference-between-a-registry-repository-and-image)
- 

---
[Home](/README.md) | [Back](../README.md)