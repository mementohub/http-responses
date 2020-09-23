# iMemento HTTP Responses
[![Build Status](https://travis-ci.org/mementohub/http-responses.svg?branch=master)](https://travis-ci.org/mementohub/http-responses)
[![Latest Stable Version](https://poser.pugx.org/imemento/http-responses/v/stable)](https://packagist.org/packages/imemento/http-responses)
[![License](https://poser.pugx.org/imemento/http-responses/license)](https://packagist.org/packages/imemento/http-responses)
[![Total Downloads](https://poser.pugx.org/imemento/http-responses/downloads)](https://packagist.org/packages/imemento/http-responses)

This packages provides a standard library of responses to be used in all the iMemento Services.

## Install
```bash
composer require imemento/http-responses
```

## Usage
```php
return new MethodNotAllowedResponse($content = '', $headers = []);
```
Each response has a specific http status code assigned to it.
