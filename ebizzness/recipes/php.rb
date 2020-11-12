# Install PHP and its modules
execute "amazon-linux-extras" do
  command "amazon-linux-extras enable php7.2; sudo yum update"
  action :run
end
  
%w{php php-cli php-common php-fpm php-mbstring php-mysqlnd php-pdo  php-xml php-curl php-imagick}.each do |pkg|
  package pkg do
    action :install
    notifies :reload, 'service[httpd]', :immediately
  end
end