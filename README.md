# Lizard Media RabbitMqPlayground #

A module shows how more advanced topologies could be built, using DLX and message-ttl. 
Module shows example of topology with error fallback and retry mechanism. Additionally for entity.confirm and entity.cancel
topics consumption of messages are delayed. In order to make it work, please apply our patches for magento modules and libraries. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

* Magento 2.3/2.4
* PHP 7.3/7.4
* RabbitMQ 3.8.*
* Apply [our patches](https://github.com/lizardmedia/magento2-mq-patches) for Magento Message Queue features.

### Installing

#### Download the module

##### Using composer (suggested)

Simply run

```
composer require lizardmedia/module-rabbitmq-playground
```

##### Downloading ZIP

Download a ZIP version of the module and unpack it into your project into
```
app/code/LizardMedia/RabbitmqPlayground
```
If you use ZIP file you will need to install all dependencies of the module
manually


#### Install the module

Run this command
```
bin/magento module:enable LizardMedia_RabbitmqPlayground
bin/magento setup:upgrade
```

## Usage

Just install module and investigate topology created. Play around by 
publishing messages (take a look at console commands) and observe how messages are handled. Every consumer handler
has a sleep function inside to make sure that message processing is visible in rabbitmq admin panel

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/lizardmedia/varnish-warmer-magento2/tags). 

## Authors

* **Bartosz Kubicki** - *Initial work, fixes & maintenance* - [Lizard Media](https://github.com/bartoszkubicki)

See also the list of [contributors](https://github.com/lizardmedia/rabbitmq-playground/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
