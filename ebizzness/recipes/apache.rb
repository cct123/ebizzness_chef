# Install Apache server
package 'httpd' do
  action :install
end
 
# Create the root directory and set the permissions and owners
directory node['ebizzness']['document_root'] do
  owner 'apache'
  group 'apache'
  mode '0755'
  recursive true
end
 
# Create the Apache log directory
directory node['ebizzness']['log_dir'] do
  recursive true
end
 
# Create the default httpd.conf file
template node['ebizzness']['default_conf'] do
  source "httpd.conf.erb"
end
 
# Enable start on boot and start Apache
service 'httpd' do
  action [:enable, :start]
end