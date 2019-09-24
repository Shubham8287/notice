#!/bin/bash
docker-compose up -d;
docker exec -i db sh -c 'exec mysql -P 9906 -uroot -proot notice' < data.sql