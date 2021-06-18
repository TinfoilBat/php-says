# PHP-says
A "Memory" type of game written in PHP and a sprinkle of JavaScript.

Displays different colored cells briefly, and then they have to be guessed. Multiple levels of difficulty, and checkpoints to continue from the last level you reached.

![](https://github.com/TinfoilBat/php-says/blob/0e653c4168ff5b2dd41d09c6f606b6f3c5705bf6/static/memory_image.jpeg)


# Requirements

1. Update packages and install apache2
```bash
sudo apt update && sudo apt install apache2 php
 ```
2. Start Apache
```bash
systemctl start apache2.service
```

# Installation instructions

1. cd to localhost
```bash
cd /var/www/html
```
2. Clone repo
```bash
git clone https://github.com/TinfoilBat/php-says.git
```
3. Start Apache2 service

```bash
systemctl start apache2.service
```
4. Open final path in browser
```bash
firefox localhost/php-says
```
