# Install PHP and its modules
%w{php72 php72-cli php72-common php72-fpm php72-mbstring php72-mysqlnd php72-pdo  php72-xml php72-curl php72-imagick}.each do |pkg|
  package pkg do
    action :install
    notifies :reload, 'service[httpd]', :immediately
  end
end