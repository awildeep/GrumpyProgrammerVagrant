# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
    config.vm.define :web do |web_config|
        web_config.vm.box = "precise32"
        web_config.vm.box_url = "http://files.vagrantup.com/precise32.box"
        web_config.vm.host_name = "sandbox-playground"
        web_config.vm.customize ["modifyvm", :id, "--memory", 768]
        web_config.vm.network :hostonly, "172.22.22.22"
        web_config.vm.share_folder "v-root", "/vagrant", "./" #, :nfs => true
        web_config.vm.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
        web_config.vm.forward_port 80, 8080
        
        web_config.vm.provision :chef_solo do |chef|
            chef.cookbooks_path = ["cookbooks", "custom_cookbooks"]
            
            chef.add_recipe "apt"
            chef.add_recipe "openssl"
      
            chef.add_recipe "apache2"
      
            #chef.add_recipe "postgresql::client"
            #chef.add_recipe "postgresql::server"

            chef.add_recipe "mysql::client"
            chef.add_recipe "mysql::server"

            chef.add_recipe "git"
            chef.add_recipe "subversion"

            chef.add_recipe "php"

            chef.add_recipe "php_modules"

            chef.add_recipe "apache2::mod_php5"
            chef.add_recipe "apache2::mod_rewrite"
            chef.add_recipe "apache2::mod_deflate"
            chef.add_recipe "apache2::mod_headers"

            chef.add_recipe "apache2_vhosts"
            
            #chef.add_recipe "composer"

            chef.json = {
                :mysql => {
                    :server_root_password => "passw0rd",
                    :server_repl_password => "passw0rd",
                    :server_debian_password => "passw0rd"
                },
                :apache2 => {
                    :keepaliverequests => 100,
                    :keepalivetimeout => 5,
                    :listen_ports => ["80", "443"]
                },
                :php => {
                    :version => "5.3.10"
                }
                #,
                #:postgresql => {
                #    :version => "9.1",
                #    :hba => [
                #        { :method => "trust", :address => "0.0.0.0/0" },
                #        { :method => "trust", :address => "::1/0" },
                #    ],
                #    :password => {
                #        :postgres => "passw0rd"
                #    }
                #}
            }
        end
    end
    
    #config.vm.define :db do |db_config|
    #    db_config.vm.box = "precise32"
    #    db_config.vm.box_url = "http://files.vagrantup.com/precise32.box"
    #    db_config.vm.host_name = "sandbox-playground"
    #    #db_config.vm.customize ["modifyvm", :id, "--memory", 768]
    #    db_config.vm.network :hostonly, "172.22.22.23"
    #    db_config.vm.share_folder "v-root", "/srv/testsite.dev", "./" #, :nfs => true
    #    db_config.vm.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
    #    db_config.vm.forward_port 80, 8080
    #    
    #    db_config.vm.provision :chef_solo do |chef|
    #        chef.cookbooks_path = ["cookbooks", "custom_cookbooks"]
    #        
    #        chef.add_recipe "apt"
    #        chef.add_recipe "openssl"
    #  
    #        chef.add_recipe "postgresql::client"
    #        chef.add_recipe "postgresql::server"
    #
    #        chef.add_recipe "mysql::client"
    #        chef.add_recipe "mysql::server"
    #
    #        chef.add_recipe "git"
    #        chef.add_recipe "subversion"
    #
    #        chef.json = {
    #            :mysql => {
    #                :server_root_password => "passw0rd",
    #                :server_repl_password => "passw0rd",
    #                :server_debian_password => "passw0rd"
    #            },
    #            :postgresql => {
    #                :version => "9.1",
    #                :hba => [
    #                    { :method => "trust", :address => "0.0.0.0/0" },
    #                    { :method => "trust", :address => "::1/0" },
    #                ],
    #                :password => {
    #                    :postgres => "passw0rd"
    #                }
    #            }
    #        }
    #    end
    #end
end
