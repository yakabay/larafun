---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_95c756966535852ee34bc69ddf0644e6 -->
## api/cities

> Example request:

```bash
curl -X GET "http://localhost/api/cities" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cities",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "name": "Kyiv",
            "dreams": [
                {
                    "id": 1,
                    "title": "Maidan+",
                    "body": "A;LSKDF ADFLK;"
                }
            ],
            "dreamsCount": 1
        },
        {
            "name": "Cherkasy",
            "dreams": [
                {
                    "id": 2,
                    "title": "Bicycle road ",
                    "body": "adsf '; kasdf'"
                },
                {
                    "id": 3,
                    "title": "AquaPark",
                    "body": "la;ksdf laskf"
                }
            ],
            "dreamsCount": 2
        }
    ],
    "itemsCount": 2
}
```

### HTTP Request
`GET api/cities`

`HEAD api/cities`


<!-- END_95c756966535852ee34bc69ddf0644e6 -->

<!-- START_c33b85881339fcf3433d5bbf0f409f8b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/dreams" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dreams",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/dreams`

`HEAD api/dreams`


<!-- END_c33b85881339fcf3433d5bbf0f409f8b -->

<!-- START_696d190fd405ecb8d3fcbe3c7b4f98bb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/dreams" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dreams",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/dreams`


<!-- END_696d190fd405ecb8d3fcbe3c7b4f98bb -->

<!-- START_01ff190116932b9367ddccb2d6996e62 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/dreams/{dream}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dreams/{dream}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/dreams/{dream}`

`HEAD api/dreams/{dream}`


<!-- END_01ff190116932b9367ddccb2d6996e62 -->

<!-- START_59b477f5c319530388c01684e52dda45 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/dreams/{dream}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dreams/{dream}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/dreams/{dream}`

`PATCH api/dreams/{dream}`


<!-- END_59b477f5c319530388c01684e52dda45 -->

<!-- START_acafb676255934aab32ea304794172c6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/dreams/{dream}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dreams/{dream}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/dreams/{dream}`


<!-- END_acafb676255934aab32ea304794172c6 -->

