# Installing Docker

### Uninstall old versions
Older versions of Docker were called `docker`, `docker.io`, or `docker-engine`. If these are installed, uninstall them:

```bash
sudo apt-get remove docker docker-engine docker.io containerd runc
```

### Installing using the repository

- Update the `apt` package index and install packages to allow apt to use a repository over HTTPS:
```bash
sudo apt-get update
```

```bash
sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```

- Add Docker's official GPG key:
```bash
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
```

- Add the repository
```bash
echo \
  "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
```

### Install Docker Engine

```bash
sudo apt-get update
```

```bash
sudo apt-get install docker-ce docker-ce-cli containerd.io
```

### Post install
1. Create the `docker` group
```bash
sudo groupadd docker
```
2. Add your user to the `docker` group.
```bash
sudo usermod -aG docker $USER
```
3. Log out and log back in so that your group membership is re evaluated.

## Reference
- [Install Docker for Ubuntu](https://docs.docker.com/engine/install/ubuntu/)
- [Post Install](https://docs.docker.com/engine/install/linux-postinstall/)


---
[Home](/README.md) | [Back](../README.md)