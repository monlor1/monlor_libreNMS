<?php
## Have a look in defaults.inc.php for examples of settings you can set here. DO NOT EDIT defaults.inc.php!

### Database config
$config['db_host'] = 'localhost';
$config['db_port'] = '3306';
$config['db_user'] = 'librenms';
$config['db_pass'] = 'Televes1';
$config['db_name'] = 'librenms';
$config['db_socket'] = '';

// This is the user LibreNMS will run as
//Please ensure this user is created and has the correct permissions to your install
$config['user'] = 'librenms';

### Locations - it is recommended to keep the default
#$config['install_dir']  = "/opt/librenms";

### This should *only* be set if you want to *force* a particular hostname/port
### It will prevent the web interface being usable form any other hostname
#$config['base_url']        = "http://librenms.company.com";

### Enable this to use rrdcached. Be sure rrd_dir is within the rrdcached dir
### and that your web server has permission to talk to rrdcached.
#$config['rrdcached']    = "unix:/var/run/rrdcached.sock";

### Default community
$config['snmp']['community'] = array("public");

### Authentication Model
$config['auth_mechanism'] = "mysql"; # default, other options: ldap, http-auth
#$config['http_auth_guest'] = "guest"; # remember to configure this user if you use http-auth

### List of RFC1918 networks to allow scanning-based discovery
#$config['nets'][] = "10.0.0.0/8";
#$config['nets'][] = "172.16.0.0/12";
#$config['nets'][] = "192.168.0.0/16";

# Update configuration
#$config['update_channel'] = 'release';  # uncomment to follow the monthly release channel
#$config['update'] = 0;  # uncomment to completely disable updates

# Enabling service checks
$config['show_services']           = 1;

# CUSTOM TELEVES
$config['title_image'] = 'images/custom/televes.png';
