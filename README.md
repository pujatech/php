# Cumulus_Lab
# vagrant-based project

A simple Vagrant boilerplate setup (configured using the [PuPHPet](https://puphpet.com/) GUI).

## Prerequisites

* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](http://www.vagrantup.com/downloads.html)

### Modifying your hosts file

On a Mac (and Linux I believe) the `hosts` files can be found in `/etc/hosts`. Simply add a new entry to the end of this file:

`172.22.22.26 dev.digitaldna.com`

**Note: The IP address should match the IP address found in `Vagrantfile`.**

### Modifying your database config info

On project/vagrant database.php

$db['default']['hostname'] = 'localhost';

$db['default']['username'] = 'root';

$db['default']['password'] = 'pass';

$db['default']['database'] = 'dev1';

And that username and password should match with info in vagrant/prepare-precise64.sh

DB_PASS=pass
DB_NAME=dev1

## Using Vagrant

**Note: all `vagrant` commands should be run from your project root directory (and not from 'inside' the virtual machine)**

In order to set up your virtual machine for the first time (fair warning - this could take quite a while), or to restart it if you've halted it you need to run:

```bash
$ vagrant up
```

**Note: During the 'up' process you may be asked for a password in order to mount the NFS shared folders. You should enter your host machine's user password.**

Once the machine has started up and installed all its dependencies you can log in to the machine using:

```bash
$ vagrant ssh
```

**You can now do all your command line work on your project from within the Vagrant box ssh shell.**

You can put the machine to sleep by running:

```bash
$ vagrant halt
```

You can also just exit the machine (leaving it running in the background):

**Note: This command you would run from 'inside' the virtual machine.**

```bash
$ exit
```

If, after having already set up the machine, you add additional shell scripts to `myproject/site/puphpet/files/exec-always` you can provision these by running:

```bash
$ vagrant provision
```

You can get rid of the machine by running:

```bash
$ vagrant destroy

