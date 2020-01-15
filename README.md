## Deployment at IDS

Using [API platform Docker Compose deployment](https://api-platform.com/docs/deployment/docker-compose).

On **IDS servers** we recommend using the [restart_api_platform.sh](https://github.com/MaastrichtU-IDS/grid-api/blob/master/restart_api_platform.sh) bash script

```bash
git clone --recursive https://github.com/MaastrichtU-IDS/grid-api.git
./restart_api_platform.sh

# Start build manually
docker-compose -f docker-compose-prod/docker-compose.build.yml pull --ignore-pull-failures
docker-compose -f docker-compose-prod/docker-compose.build.yml build --pull

docker-compose -f docker-compose-prod/docker-compose.yml up -d
```

> Should we push to container registry? `docker-compose -f docker-compose-prod/docker-compose.build.yml push`

### Generate schema

See [API-platform documentation](https://api-platform.com/docs/schema-generator/getting-started/).

* Install

```bash
# Just install schema-generator from composer.json
composer install
# Install PHP Composer and dependencies if needed
sudo apt install curl php-cli php-mbstring git unzip php-xml
composer require --dev api-platform/schema-generator
```

* Generate types from [api/config/schema.yaml](https://github.com/MaastrichtU-IDS/grid-api/blob/master/api/config/schema.yaml).

```bash
vendor/bin/schema generate-types api/src/ api/config/schema.yaml
```

> The PHP types for this schema has now been generated in `api/src/Entity`

## Test API platform locally

```bash
# In grid-api
docker-compose up -d
docker-compose down
```

> Navigate to
>
> * [http://localhost:8080](http://localhost:8080/) for the API
> * [http://localhost:8085](http://localhost:8085/) for the admin

---

## Create a new API platform

* Create repository by using template from https://github.com/api-platform/api-platform/

* In this repository, get the submodule to compile the Docker Compose production

```bash
git submodule add https://github.com/MaastrichtU-IDS/docker-compose-prod.git
```

* Change the `.env` file to provide your own parameters and URL
* Change the main [docker-compose.yml](https://github.com/MaastrichtU-IDS/grid-api/blob/master/docker-compose.yml)
  * To remove h2-proxy
  * Change API and UI port to 8084 and 8085
* Define schema in [api/config/schema.yaml](https://github.com/MaastrichtU-IDS/grid-api/blob/master/api/config/schema.yaml)

---

## Original readme

API Platform is a next-generation web framework designed to easily create API-first projects without compromising extensibility
and flexibility:

* Design your own data model as plain old PHP classes or [**import an existing one**](https://api-platform.com/docs/schema-generator)
  from the [Schema.org](https://schema.org/) vocabulary.
* **Expose in minutes a hypermedia REST or a GraphQL API** with pagination, data validation, access control, relation embedding,
  filters and error handling...
* Benefit from Content Negotiation: [GraphQL](https://graphql.org), [JSON-LD](https://json-ld.org), [Hydra](https://hydra-cg.com),
  [HAL](https://github.com/mikekelly/hal_specification/blob/master/hal_specification.md), [JSONAPI](https://jsonapi.org/), [YAML](https://yaml.org/), [JSON](https://www.json.org/), [XML](https://www.w3.org/XML/) and [CSV](https://www.ietf.org/rfc/rfc4180.txt) are supported out of the box.
* Enjoy the **beautiful automatically generated API documentation** ([Swagger](https://swagger.io/)/[OpenAPI](https://www.openapis.org/)).
* Add [**a convenient Material Design administration interface**](https://api-platform.com/docs/admin) built with [React](https://reactjs.org/)
  without writing a line of code.
* **Scaffold fully functional Progressive-Web-Apps and mobile apps** built with [React](https://api-platform.com/docs/client-generator/react),
[Vue.js](https://api-platform.com/docs/client-generator/vuejs) or [React Native](https://api-platform.com/docs/client-generator/react-native)
thanks to [the client generator](https://api-platform.com/docs/client-generator) (a Vue.js generator is also available).
* Install a development environment and deploy your project in production using **[Docker](https://api-platform.com/docs/distribution)**
and [Kubernetes](https://api-platform.com/docs/deployment/kubernetes).
* Easily add **[JSON Web Token](https://api-platform.com/docs/core/jwt) or [OAuth](https://oauth.net/) authentication**.
* Create specs and tests with a **developer friendly API testing tool** on top of [Behat](https://behat.org/).

[![Travis CI](https://travis-ci.org/api-platform/core.svg?branch=master)](https://travis-ci.org/api-platform/core)
[![CircleCI](https://circleci.com/gh/api-platform/core/tree/master.svg?style=shield)](https://circleci.com/gh/api-platform/core/tree/master)
[![AppVeyor](https://ci.appveyor.com/api/projects/status/grwuyprts3wdqx5l/branch/master?svg=true)](https://ci.appveyor.com/project/dunglas/dunglasapibundle/branch/master)
[![Codecov](https://codecov.io/gh/api-platform/core/branch/master/graph/badge.svg)](https://codecov.io/gh/api-platform/core/branch/master)
[![SymfonyInsight](https://insight.symfony.com/projects/92d78899-946c-4282-89a3-ac92344f9a93/mini.svg)](https://insight.symfony.com/projects/92d78899-946c-4282-89a3-ac92344f9a93)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/api-platform/core/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/api-platform/core/?branch=master)

The official project documentation is available **[on the API Platform website](https://api-platform.com)**.

API Platform embraces open web standards (OpenAPI, JSON-LD, GraphQL, Hydra, HAL, JSONAPI, JWT, OAuth, HTTP...) and the
[Linked Data](https://www.w3.org/standards/semanticweb/data) movement. Your API will automatically expose structured data
in Schema.org / JSON-LD. It means that your API Platform application is usable **out of the box** with technologies of
the semantic web.

It also means that **your SEO will be improved** because **[Google leverages these formats](https://developers.google.com/search/docs/guides/intro-structured-data)**.

Last but not least, the server component of API Platform is built on top of the [Symfony](https://symfony.com) framework,
while client components leverage [React](https://reactjs.org/) (a [Vue.js](https://vuejs.org/) flavor is also available).
It means that you can:

* Use **thousands of Symfony bundles and React components** with API Platform.
* Integrate API Platform in **any existing Symfony or React application**.
* Reuse **all your Symfony and React skills**, benefit of the incredible amount of documentation available.
* Enjoy the popular [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html) (used by default, but fully optional:
  you can use the data provider you want, including but not limited to MongoDB and Elasticsearch)

## Install

[Read the official "Getting Started" guide](https://api-platform.com/docs/distribution).

## Credits

Created by [Kévin Dunglas](https://dunglas.fr). Commercial support available at [Les-Tilleuls.coop](https://les-tilleuls.coop).
