Vagrant.configure("2") do |config|

  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

 
  
  config.vm.hostname = "dev.digitaldna.com"
  config.vm.network :private_network, ip: "172.22.22.26"
  config.vm.network :forwarded_port, guest: 80, host: 4567


  config.vm.synced_folder ".", "/var/www/html/", type: "nfs"
  config.vm.provision :shell, :path => "vagrant/prepare-precise64.sh"
  config.vm.provision :shell, :path => "vagrant/setup-app.sh"
end

