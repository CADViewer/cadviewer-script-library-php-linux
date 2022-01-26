# cadviewer-script-library-php-linux

The repository contains a full setup of CADViewer with CAD Converters and script controllers for Apache Linux running PHP.

Install the content of this repository on apache Linux under /var/www/html/cadviewer/.



## This package contains

1: CADViewer script library  - in its preferred folder structure

2: AutoXchange AX2022 Converter and DWG Merge 2022 Converter - in their preferred folder structure

3: All structures for file-conversion, sample drawings, redlines, etc. 

4: A number of HTML files with CADViewer samples.

5: The folder structure for script handlers for communication between CADViewer and the back-end AutoXchange 2022.


## This package does not contain

6: The converter folder structure contains a larger set of fonts, installed in /cadviewer/converters/ax2022/linux/fonts/, but a fuller set of fonts can be installed. 

Read the sections on installing and handling [Fonts](https://tailormade.com/ax2020techdocs/installation/fonts/) in [AutoXchange 2020 TechDocs](https://tailormade.com/ax2020techdocs/) and [TroubleShooting](https://tailormade.com/ax2020techdocs/troubleshooting/).



## How to Use

Once installed, the HTML samples under /cadviewer/html/ can be run from a web-browser. Use http://localhost/cadviewer/html/CADViewer_fileloader_670.html as a starting point (assuming that your have installed under http://localhost).

1: If changing the location of the installation, please update ***/cadviewer/php/CADViewer_config.php***. The top part of this config file contains automated settings of ***$home_dir*** (cadviewer install folder) and ***$httpHost*** (cadviewer install folder url), but they can be manually overwritten. It also contains variables for the install platform. 

2: If updating any of executables in the install structure, then update their variable names in  ***/cadviewer/php/CADViewer_config.php**. These varaiables can be found with ***"_executable"*** in the variable name, for example ***"ax2020_executable"***. 

3: Please note the variable controls in the HTML documents as described below in ***Troubleshooting***.



## Documentation 

-   [CADViewer Techdocs and Installation Guide](https://cadviewer.com/cadviewertechdocs/download)




## Updating CAD Converters

This repository should contain the latest converters, but in case you need to update any of the back-end converters please follow: 

* [Download **AutoXchange**](/download/) (and other converters), install (unzip) AX2020 in **cadviewer/converters/ax2020/windows** or **cadviewer/converters/ax2020/linux** or in the designated folder structure.

* Read the sections on installing and handling [Fonts](https://tailormade.com/ax2020techdocs/installation/fonts/) in [AutoXchange 2020 TechDocs](https://tailormade.com/ax2020techdocs/) and [TroubleShooting](https://tailormade.com/ax2020techdocs/troubleshooting/).

* Try out the samples and build your own application!
 
 

 
 ## Troubleshooting

One issue that often appears in installations is that interface icons do not display properly:

![Icons](https://cadviewer.com/cadviewertechdocs/images/missing_icons.png "Icons missing")

Typically the variables *ServerUrl*, *ServerLocation* or *ServerBackEndUrl* in the controlling **HTML**  document in ***/cadviewer/html/*** are not set to reflect the front-end server url or port.

<pre style="line-height: 110%">


    var ServerBackEndUrl = "";  // or what is appropriate for my server; used for NodeJS server only
    var ServerUrl = "http://localhost/cadviewer/";   // or what is appropriate for my server
    var ServerLocation = ""; // or what is appropriate for my server
</pre>
 
 
 
**Have Fun!**  - and get in [touch](mailto:developer@tailormade.com)  with us!
