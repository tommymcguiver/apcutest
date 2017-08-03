For testing php apcu and php7.1

```
docker build -t apache-apcu  . && docker run -p 80:80 apache-apcu
/usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 2 -r http://127.0.0.1/test.php
/usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 1 -r http://127.0.0.1/iter.php
```

# Output

```
~ ❯❯❯ /usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 2 -r http://127.0.0.1/test.php
This is ApacheBench, Version 2.3 <$Revision: 1757674 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 127.0.0.1 (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests


Server Software:        Apache/2.4.10
Server Hostname:        127.0.0.1
Server Port:            80

Document Path:          /test.php
Document Length:        1911 bytes

Concurrency Level:      2
Time taken for tests:   26.037 seconds
Complete requests:      10000
Failed requests:        4812
   (Connect: 0, Receive: 0, Length: 4812, Exceptions: 0)
Total transferred:      21289624 bytes
HTML transferred:       19119624 bytes
Requests per second:    384.06 [#/sec] (mean)
Time per request:       5.207 [ms] (mean)
Time per request:       2.604 [ms] (mean, across all concurrent requests)
Transfer rate:          798.50 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.3      0      19
Processing:     1    5  29.2      3    1012
Waiting:        0    5  29.2      3    1012
Total:          1    5  29.2      4    1012

Percentage of the requests served within a certain time (ms)
  50%      4
  66%      4
  75%      5
  80%      5
  90%      6
  95%      8
  98%     13
  99%     16
 100%   1012 (longest request)
 ```
 ```
 ~/d/php-src ❯❯❯ /usr/local/Cellar/ab/2.4.25/bin/ab -n 10000 -c 1 -r http://127.0.0.1/iter.php
This is ApacheBench, Version 2.3 <$Revision: 1757674 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/
Benchmarking 127.0.0.1 (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests
Server Software:        Apache/2.4.10
Server Hostname:        127.0.0.1
Server Port:            80
Document Path:          /iter.php
Document Length:        0 bytes
Concurrency Level:      1
Time taken for tests:   46.503 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      1904079 bytes
HTML transferred:       0 bytes
Requests per second:    215.04 [#/sec] (mean)
Time per request:       4.650 [ms] (mean)
Time per request:       4.650 [ms] (mean, across all concurrent requests)
Transfer rate:          39.99 [Kbytes/sec] received
Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    1  67.7      0    6770
Processing:     1    4  23.2      2    1011
Waiting:        0    4  23.0      2    1011
Total:          1    5  71.5      3    6772
Percentage of the requests served within a certain time (ms)
  50%      3
  66%      3
  75%      4
  80%      4
  90%      5
  95%      7
  98%     10
  99%     14
 100%   6772 (longest request)
 ```
