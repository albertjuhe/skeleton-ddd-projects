# DDD articles
* Don't Use Entities in Symfony Forms. Use Custom Data Objects Instead (https://blog.martinhujer.cz/symfony-forms-with-request-objects/)
* RigorTalks (https://carlosbuenosvinos.com/category/rigor-talks/)
* Emmbedables objects https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/tutorials/embeddables.html
* Mapping types https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/cookbook/advanced-field-value-conversion-using-custom-mapping-types.html
* Command Bus: https://matthiasnoback.nl/2015/01/responsibilities-of-the-command-bus/
* Transactional https://tactician.thephpleague.com/plugins/doctrine/
* Redis Cache https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-redis-on-ubuntu-18-04
* ElasticSearch and Kibana https://www.admintome.com/blog/install-elasticsearch-on-ubuntu-18-04-1/
* DDD Sample Cargo Eric Evans https://github.com/codeliner/php-ddd-cargo-sample
* Protobuf php https://mattallan.me/posts/protobuf-php-services/

# Symfony 4

## Reactjs

### Install
Symfony 4 install https://www.cloudways.com/blog/symfony-react-using-webpack-encore/

```
composer require symfony/webpack-encore-pack
```
Manage react with yarn

```
yarn add react react-dom prop-types babel-preset-react --dev
yarn add babel-polyfill babel-preset-env --dev
```

Symfony 4 integration https://www.thinktocode.com/2018/06/21/symfony-4-and-reactjs/

### Problems

React Native Error: ENOSPC: System limit for number of file watchers reached
https://stackoverflow.com/questions/55763428/react-native-error-enospc-system-limit-for-number-of-file-watchers-reached

Manifest.json creation
https://stackoverflow.com/questions/51393459/symfony-error-an-exception-has-been-thrown-during-the-rendering-of-a-template

### Comands

```
yarn encore dev
```

## DONE
1) CQRS (CommandBus tactician, QueryBus Symfony Messenger)
1) Reactjs as a FrontEnd
1) ElasticSearch
1) Docker



