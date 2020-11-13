# Install PHP and its modules
execute "amazon-linux-extras" do
  command "amazon-linux-extras enable php7.4; sudo yum clean metadata"
  action :run
end
  
%w{php php-cli php-common php-fpm php-mbstring php-mysqlnd php-pdo php-pear php-cgi php-xml php-curl php-gettext php-json php-fpm php-intl php-zip}.each do |pkg|
  package pkg do
    action :install
  end
end

execute "install php74-php-pecl-imagick" do
  command "yum install epel-release –y"
  action :run
end

execute "install php74-php-pecl-imagick" do
  command "amazon-linux-extras install epel"
  action :run
end

execute "install php74-php-pecl-imagick" do
  command "yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm"
  action :run
end

execute "install php74-php-pecl-imagick" do
  command "yum --enablerepo=remi install php74-php-pecl-imagick"
  action :run
end
