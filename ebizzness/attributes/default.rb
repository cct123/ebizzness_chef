# The name of your site
default['ebizzness']['server_name'] ='ebizzness'
# The root directory of your site, it will be /srv/www/ebizzness/current
default['ebizzness']['document_root'] = "/srv/www/ebizzness/current"
# The default config file
default['ebizzness']['default_conf'] = '/etc/httpd/conf/httpd.conf'
# e-mail for the server admin
default['ebizzness']['server_admin'] ='liuyez123@gmail.com'
# log dir for the site
default['ebizzness']['log_dir'] = '/var/log/www'
# Error log for the site, it will be /var/log/wwwyoursitename-error.log
default['ebizzness']['error_log'] = "#{node['ebizzness']['log_dir']}/""#{node['ebizzness']['server_name']}-error.log"
# Access log for the site, it will be /var/log/wwwyoursitename-access.log
default['ebizzness']['custom_log'] = "#{node['ebizzness']['log_dir']}/""#{node['ebizzness']['server_name']}-access.log"