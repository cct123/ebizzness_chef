# Clone ebizzness from GitHub
execute "Clone ebizzness from GitHub" do
  command "cd /srv/www/ebizzness/current; rm -rf * .*; git clone https://github.com/cct123/ebizzness.git ."
  action :run
end

execute "set the directory permissions and owners" do
  command "chown -R apache:apache /srv/www/ebizzness/current; chmod 0755 -R /srv/www/ebizzness/current"
  action :run
end

# Restart Apache
service 'httpd' do
  action [:restart]
end

# Restart php-fpm
service 'php-fpm' do
  action [:restart]
end
