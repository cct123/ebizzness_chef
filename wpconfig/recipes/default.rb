cookbook_file "/srv/www/ebizzness/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'apache'
  group 'apache'
end
