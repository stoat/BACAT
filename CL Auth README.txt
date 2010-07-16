INSTALLATION INSTRUCTIONS
-x-x-x-x-x-x-x-x-x-x-x-x-
WARNING! There is No Warranty or Guarantuee that comes with this product! Use at you own risk.

Licensed under the GNU Public License
-x-x-x-x-x-x-x-x-x-x-x-x-


CL Auth BETA v0.2
Date: 13/07/2008
=================

CL Auth is really easy to use and its also very easy to install!

1) Extract the files from this archive to your CI directory

2) Import the SQL Schema and then Import or Alter your CI_Sessions table accordingly

3) Configure your "autoload" config to load

   $autoload['libraries'] = array('database', 'CL_Auth');
   $autoload['helper'] = array('url', 'form');
   $autoload['config'] = array('cl_auth');

4) Open your "config" file and change $config['sess_use_database'] to TRUE.

   Note: In your "config", you MUST have "use_database" set to TRUE or you will get errors.

5) Load the "cl_auth" config and change settings if necessary (stock settings should be okay)

6) Make sure your "captcha" folder is writeable (chmod 777). This folder should accessiable at http://your-code-igniter/captcha/

   If you need to change its location then alter the "cl_auth" config (currently doesn't support subdomains).

7) Load up the "example" page to get a tastier of how CL Auth works!

Thats it. Please consult the topic on the forum is you need more help.

Notes:
-----------------------------------------------------------------
Sorry but there is no bundled documentation with this version yet...

Please consult the online documentation for now:
http://www.jasonashdown.co.uk/cl_auth_doc/