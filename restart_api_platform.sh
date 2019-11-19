#!/bin/bash
docker-compose -f docker-compose-prod/docker-compose.yml down
git pull
cd docker-compose-prod
git checkout master
git pull
cd ..
docker-compose -f docker-compose-prod/docker-compose.build.yml pull --ignore-pull-failures
docker-compose -f docker-compose-prod/docker-compose.build.yml build --pull
docker-compose -f docker-compose-prod/docker-compose.yml up -d
