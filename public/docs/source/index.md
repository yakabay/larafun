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

