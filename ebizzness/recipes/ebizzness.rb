# Clone ebizzness from GitHub
execute "Clone ebizzness from GitHub" do
  command "cd /srv/www/ebizzness/current; git clone https://github.com/cct123/ebizzness.git ."
  action :run
end

# Create the root directory and set the permissions and owners
directory node['ebizzness']['document_root'] do
  owner 'apache'
  group 'apache'
  mode '0755'
  recursive true
end