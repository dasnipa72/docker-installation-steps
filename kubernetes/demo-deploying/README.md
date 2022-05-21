
# Load the docker image
```bash
sudo kind load docker-image hands-on_api hands-on_webapp --name demo
```

# Deploy API & Webapp

```bash
sudo kubectl apply -f . --context kind-demo
```


# Get the resources deployed

```bash
sudo kubectl get namespace --context kind-demo
sudo kubectl get pods --namespace demo --context kind-demo
sudo kubectl get service --namespace demo --context kind-demo
```


# Get the IP address of the kubernetes cluster
```bash
sudo kubectl get nodes -o wide --context kind-demo
```


---
[Home](/README.md) | [Back](../README.md)