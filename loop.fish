#!/usr/bin/env fish

redis-cli set error 0
while true
  php adjustOffset.php
  set error (redis-cli get error)
  if math "$error==1" > /dev/null
    redis-cli incr offset
    php adjustOffset.php
  end
  php main.php
end
