# Clone ebizzness from GitHub
execute "Clone ebizzness from GitHub" do
  command "cd /srv/www/ebizzness/current; rm * .*; git clone https://github.com/cct123/ebizzness.git ."
  action :run
end

execute "set the directory permissions and owners" do
  command "chown -R apache:apache /srv/www/ebizzness/current; chmod 0755 -R /srv/www/ebizzness/current"
  action :run
end
