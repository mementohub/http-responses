# iMemento HTTP Responses
[![Build Status](https://github.com/mementohub/http-responses/workflows/Testing/badge.svg)](https://github.com/mementohub/http-responses/actions)
[![Latest Stable Version](https://img.shields.io/packagist/v/imemento/http-responses)](https://packagist.org/packages/imemento/http-responses)
[![License](https://img.shields.io/packagist/l/imemento/http-responses)](https://packagist.org/packages/imemento/http-responses)
[![Total Downloads](https://img.shields.io/packagist/dt/imemento/http-responses)](https://packagist.org/packages/imemento/http-responses)

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
