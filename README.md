# Demo-docker-swarm

# Development
```bash
composer install
docker-compose -f dev.docker-compose.yml up --build
```

# Production
```
- Build docker image
docker build -f prod.app.dockerfile -t {$repositoryInDockerHub}/{$nameImage} .
docker build -f prod.webb.dockerfile -t {$repositoryInDockerHub}/{$nameImage} .

- Push image to Docker hub
docker push {$repositoryInDockerHub}/{$nameImage}

Ex: docker push rogteam/php-web 
docker push rogteam/php-app

```

# Test Docker swarm in local
```
- Install Virtualbox
- Run Command create VPS:
docker-machine create vps-1 -d virtualbox
docker-machine create vps-2 -d virtualbox
docker-machine create vps-3 -d virtualbox
- Show ip VPS
docker-machine ls

- SSH To VPS 1 and make init Swarm Leader:
docker-machine ssh vps-1
vps1:# docker swarm init --advertise-addr $IP_VPS1
And copy result: docker swarm join --token ......

- SSH To VPS 2 and 3 and run paste command 
docker swarm join --token

- Copy prod.docker-compose.yml in local to vps-1 with command:
docker-machine scp prod.docker-compose.yml vps-1:/home/docker/prod.docker-compose.yml

- In VPS-1 run command:
docker stack deploy --compose-file prod.docker-compose.yml nameStack

- Go to browser url: $IP_VPS1

```

# Document 
Slide seminar: http://sal.vn/seminar-q1-2021
Ultimate AWS Certified Solutions Architect Associate: https://drive.google.com/file/d/1l2P6nPf9_fQfawmmiY_0tVhd2FUHXn0Z/view?usp=sharing
