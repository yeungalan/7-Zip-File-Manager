# 7-Zip File Manager
<img src="https://img.shields.io/static/v1.svg?label=Language&message=PHP%20%20Javascript&color=purple"/>
<img src="https://img.shields.io/static/v1.svg?label=Build&message=Pre-Release&color=blue"/>

<img src="https://dl.alanyeung.co/7zdemov1.png">

## Installation
Download the repo to your desktop, rezipping only the folder "7-Zip-File-Manager" and upload it to your ArOZ Online System via the "Add or Remove WebApp" interface in the System Settings > Host.

Sometimes you may need to fix the premission by using following bash command
```bash
sudo chmod 0777 7za_x86
sudo chmod 0777 7za
sudo chmod -R 0777 tmp
sudo chown www-data:www-data 7za_x86
sudo chown www-data:www-data 7za
```

## Installation via Package Manager
Search 7-zip file manager and click on install, after a while 7-zip should be available on your system

## Functions
- Unzip non-password protected archive

## Running on ArOZ
You do not need to install anything extra, this WebAPP already contains the pre-compiled binary,so just install and use it. :)

## License
7za: https://www.7-zip.org/license.txt <br>
PHP File: MIT 
