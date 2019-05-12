# 7-Zip File Manager
A wrapper for ArOZ Online Beta system. This webapp using UNIX shell and PHP as base.

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

## Web Interface
You can still use the wrapper's WebUI if you are not into the ArOZ Online System. This module also support FloatWindow Mode under Virtual Desktop Interface (ArOZ Online Only).

<img src="https://dl.alanyeung.co/7zdemo.png">

## Running on ArOZ
You do not need to install anything extra, this WebAPP already contains the pre-compiled binary,so just install and use it. :)

## License
7za: https://www.7-zip.org/license.txt <br>
PHP File: MIT 

##Known issues
Windows can't decode non alphabet filename
