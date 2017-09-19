# iMemento HTTP Responses

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