<h1 align="center">API Books documentation</h1>

## Endpoints

### Method POST /authors

Description: Creating a new author.

URL: https://api-books.loc/authors/create/

HTTP Method: POST

#### Request parameters:

**name** (string) *required* - Author's name <br>
**birth_year** (integer) - Year of birth <br>
**country** (string) - Country where the author was born <br>

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
POST https://api-books.loc/authors/create/
```

#### Request body:

```
{
    "name": "Charles Dickens",
    "birth_year": "1812",
    "country": "Great Britain",
}
```

#### Response (Status: 200 OK)

```
{
    "name": "Charles Dickens",
    "birth_year": "1812",
    "country": "Great Britain",
    "id": 1
}
```

#### Response (Status: 404 Not Found)

```
{
  "error": "Resource not found"
}
```

### Method PUT /authors

Description: Author update by id.

URL: https://api-books.loc/authors/update/{id}/

HTTP Method: PUT

#### Request parameters:

**name** (string) *required* - Author's name <br>
**birth_year** (integer) - Year of birth <br>
**country** (string) - Country where the author was born <br>

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
POST https://api-books.loc/authors/update/1/
```

#### Request body:

```
{
    "name": "Charles Dickens",
    "birth_year": "1899",
    "country": "Great Britain"
}
```

#### Response (Status: 200 OK)

```
{
    "id": 1,
    "name": "Charles Dickens",
    "birth_year": "1899",
    "country": "Great Britain"
}
```

#### Response (Status: 404 Not Found)

```
{
    "name": "Not Found",
    "message": "Author not found",
    "code": 0,
    "status": 404,
    "type": "yii\\web\\NotFoundHttpException"
}
```

### Method GET /authors

Description: Get a list of all authors.

URL: https://api-books.loc/authors/

HTTP Method: GET

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
GET https://api-books.loc/authors/
```

#### Response (Status: 200 OK)

```
[
    {
        "id": 1,
        "name": "Charles Dickens",
        "birth_year": "1899",
        "country": "Great Britain"
    },
    {
        "id": 2,
        "name": "Ernest Hemingway",
        "birth_year": "1899",
        "country": "USA"
    }
]
```
