# Kubernetes resources

## Table of Content

- [Introduction](#kind)
- [Namespace](#namespace)
- [Pod](#pod)
- [Deployment](#deployment)
- [Service](#service)
- [Reference](#reference)


# Namespace
## Creating a Namespace
- List the namespaces present in the Kubernetes cluster.
  ```bash
  $ kubectl get namespaces

  NAME          STATUS    AGE
  default       Active    5m
  kube-public   Active    5m
  kube-system   Active    5m
    ```
We can create a Namespace in two ways either by using kubectl create namespace command or by using configuration file
- Create a new namespace my-namespace with command.
```bash
kubectl create namespace niveus
```
- List the namespaces.
```bash
$ kubectl get namespace

NAME           STATUS    AGE
default        Active    8m
kube-public    Active    8m
kube-system    Active    8m
nevius   Active    3s
```
We can also create a namespace using the configuration file.
- Lets create a namespace from configuration file.

```yaml
apiVersion: v1
kind: Namespace
metadata:
  name: test-ns
```
- Deploy above file.
```bash
$ kubectl apply -f namespace.yaml 
namespace/test-ns created
```

- List the namespaces.
```bash
$ kubectl get namespace

NAME           STATUS    AGE
default        Active    18m
kube-public    Active    18m
kube-system    Active    18m
niveus         Active    9m
test-ns        Active    2m 
```

- Describing a namespace
```bash
kubectl describe namespace niveus
```

- Deleting a namespace  
Using command
```bash
kubectl delete namespace niveus 
```
Using the file
```bash
kubectl delete -f namespace.yaml
```


# Pod

## Creating a pod using the following yaml file

```yaml
apiVersion: v1
kind: Pod
metadata:
  name: nginx-a
  namespace: niveus
  labels:
    app: nginx-a
spec:
  containers:
  - name: nginx
    image: nginx:1.14.2
    ports:
    - containerPort: 80
```
## Apply changes
```bash
kubectl apply -f pod.yaml
```

## List all pods
```bash
kubectl get pods --namespace niveus
```

# Deployment

```yaml
apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-b
  namespace: niveus
  labels:
    app: nginx-b
spec:
  replicas: 1
  selector:
    matchLabels:
      app: nginx-b
  template:
    metadata:
      labels:
        app: nginx-b
    spec:
      containers:
      - name: nginx-b
        image: nginx:1.14.2
        ports:
        - containerPort: 80
```

## Apply changes
```bash
kubectl apply -f deployment.yaml
```

## List all deployments
```bash
kubectl get deployment --namespace niveus
```

# Service

```yaml
apiVersion: v1
kind: Service
metadata:
  name: nginx-service
  namespace: niveus
spec:
  selector:
    app: nginx-b
  ports:
    - protocol: TCP
      port: 80
      targetPort: 80
      nodePort: 30023
  type: NodePort
```

```bash
kubectl get service --namespace niveus
```
