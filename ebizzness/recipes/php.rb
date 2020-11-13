# Install PHP and its modules
execute "amazon-linux-extras" do
  command "amazon-linux-extras disable php7.4; amazon-linux-extras disable php7.2; amazon-linux-extras enable php7.3; sudo yum clean metadata"
  action :run
end
  
%w{php php-cli php-common php-fpm php-mbstring php-mysqlnd php-pdo php-pear php-cgi php-xml php-curl php-gettext php-json php-fpm php-intl php-zip}.each do |pkg|
  package pkg do
    action :install
  end
end

execute "install php-imagick" do
  command "yum install epel-release –y"
  action :run
end

# Enable start on boot and start Apache
service 'httpd' do
  action [:enable, :start]
end
