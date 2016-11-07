# -*- mode: ruby -*-
# vi: set ft=ruby :

required_plugins = {"vagrant-hostmanager" => "1.8.1" }

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.box_check_update = false

  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.ignore_private_ip = false
  config.hostmanager.include_offline = true

  config.vm.provider "virtualbox" do |v|
      v.memory = 1024
      v.cpus = 1
  end

  config.vm.define 'php-admission-test.dev' do |node|
    node.vm.hostname = 'php-admission-test.dev'
    node.vm.network :private_network, ip: '192.168.19.142'
  end

  config.vm.synced_folder ".", "/vagrant", type: "nfs"

  #Hosts file management
  if Vagrant.has_plugin?("vagrant-hostmanager")
    config.vm.provision :hostmanager
  end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbook.yml"
  end

  config.vm.post_up_message = "HTTP on php-admission-test.dev"
end
