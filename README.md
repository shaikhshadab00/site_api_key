Site API Key
=======================

Project site: https://github.com/shaikhshadab00/site_api_key

What Is This?
-------------

This module is intended to provide to set up site API key and view JSON formatted node only for the content type of page.  


How To Use The Site API Key
-----------------------

Following steps to set up and display JSON  formatted by using the site API key.

1. Enable the module and goto basic site information configuration page 
'/admin/config/system/site-information'. Enter Site API key value and click update configuration button.

2. After setup site API key goto to URL '/page_json/{siteapikey}/{node}'
where 'siteapikey' is that string value which is stored as site API key
and node replace with node id of page content type. you will display JSON
representation of the node.

3. To remove site API key just make site API key field black and enter 
update the configuration button.

How To Install The Module
--------------------------
1. Download or clone project from Github.

2. Make sure the folder name of the project is 'site_api_key', if not replace. 

3. The project installs like any other Drupal module. It is extensive
documentation on how to do this here:
https://drupal.org/documentation/install/modules-themes/modules-8 But essentially:
Download the tarball and expand it into the modules/ directory in your Drupal 8
installation.

4. Within Drupal, enable any site API key module you wish to explore in Admin
menu > Extend.

Thanks.
