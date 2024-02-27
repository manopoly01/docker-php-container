## Start Docker Container

First, build the container with the following command:
```bash
docker build -t php-container .
```

### Linux
Then, run the container with the following command:
```bash
docker run -d -p 8080:80 --name php-container -v $(pwd)/src:/var/www/html php-container
```

### Windows
Then, run the container with the following command:
```bash
docker run -d -p 8080:80 --name php-container -v %cd%\src:/var/www/html php-container
```