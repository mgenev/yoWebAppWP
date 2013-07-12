yoWebAppWP
==========
yeoman webapp front end with wordpress back end

Instructions
=========
This is the same webapp from the original webapp generator https://github.com/yeoman/generator-webapp with added PHP support and a wordpress installation as a subfolder of the /app folder.
You have to have the full stack to run "yo webapp" plus a working php, apache and mysql installation. Then clone this repo then modify your root directory in apache's httpd.conf to point to the path to the /app folder where the original index.php is with 'allo 'allo and all the other stuff.

To see the available tasks:
<pre>grunt --help</pre> 
they should be the same as the officially supported webapp generator. 

The intent here is to have the ability to create a modern UI with dependency management and all the optimization which yeoman provides and then consume those assets from your wordpress theme as easily as setting the right path. This opens the doors to a whole new generation of WP theming with the latest technology for UI.



