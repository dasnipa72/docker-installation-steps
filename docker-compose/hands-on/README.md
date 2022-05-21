# Hands On

For this example we will see how do we use docker-compose to smooth our development using two services:
- API
  This service will give us an API endpoint /people whose response will be a JSON data of users.
- Webapp
  This webapp will consume the API from the API service and render the output.

- We have defined a docker-compose [here](./docker-compose.yaml)

## Commands

Building images for the services
```bash
sudo docker-compose build
```

Running the docker-compose service in foreground
```bash
sudo docker-compose up
```

Running the docker-compose service in background
```bash
sudo docker-compose up -d
```

## Other Commands
```bash
sudo docker-compose up -d
```

## Realtime changes

- Change the API
  - Add a new endpoint
    ```python
      @app.route("/person", methods=['get'])
      def get_person():

        return "Hello world"

    ```
  - Add a new entry in the dataset.
    ```csv
    Daryl,Aranha,32,Udupi,daryl.aranha@example.com,darylaranha
    ```
- Change the weapp
  Change the color from warning to success.


---
[Home](/README.md) | [Back](../README.md)