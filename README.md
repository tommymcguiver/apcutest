For testing php apcu and php7.1

```
docker build -t apache-apcu  . && docker run -p 80:80 apache-apcu
/usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 2 -r http://127.0.0.1/test.php
/usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 1 -r http://127.0.0.1/iter.php
```
