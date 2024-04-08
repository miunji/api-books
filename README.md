<h1 align="center">API Books documentation</h1>

## Endpoints

### Method POST /authors

Description: Creating a new author.

URL: https://api-books.loc/authors/create/

HTTP Method: POST

#### Request fields:

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
    "country": "Great Britain"
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

#### Request fields:

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

### Method POST /books

Description: Creating a new book.

URL: https://api-books.loc/books/create/

HTTP Method: POST

#### Request fields:

**title** (string) *required* - Book's name <br>
**author_id** (integer) *required* - Author <br>
**pages** (integer) - Number of pages <br>
**language** (string) - Language <br>
**genre** (string) - Genre <br>
**description** (string) - Description <br>

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
POST https://api-books.loc/books/create/
```

#### Request body:

```
{
    "title": "Oliver Twist",
    "author_id": "1",
    "pages": "512",
    "language": "English",
    "genre": "Serial novel",
    "description": "Oliver Twist; or, The Parish Boy's Progress, is the second novel by English author Charles Dickens. It was originally published as a serial from 1837 to 1839 and as a three-volume book in 1838.[1] The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family."
}
```

#### Response (Status: 200 OK)

```
{
    "title": "Oliver Twist",
    "author_id": "1",
    "pages": "512",
    "language": "English",
    "genre": "Serial novel",
    "description": "Oliver Twist; or, The Parish Boy's Progress, is the second novel by English author Charles Dickens. It was originally published as a serial from 1837 to 1839 and as a three-volume book in 1838.[1] The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family."
    "id": 1
}
```

#### Response (Status: 404 Not Found)

```
{
  "error": "Resource not found"
}
```

### Method PUT /books

Description: Books update by id.

URL: https://api-books.loc/books/update/{id}/

HTTP Method: PUT

#### Request fields:

**title** (string) *required* - Book's name <br>
**author_id** (integer) *required* - Author <br>
**pages** (integer) - Number of pages <br>
**language** (string) - Language <br>
**genre** (string) - Genre <br>
**description** (string) - Description <br>

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
PUT https://api-books.loc/books/update/1/
```

#### Request body:

```
{
    "title": "Oliver Twist",
    "author_id": "1",
    "pages": "700",
    "language": "English",
    "genre": "Mystery",
    "description": "Oliver Twist; or, The Parish Boy's Progress, is the second novel by English author Charles Dickens. It was originally published as a serial from 1837 to 1839 and as a three-volume book in 1838.[1] The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family."
}
```

#### Response (Status: 200 OK)

```
{
    "id": 1,
    "title": "Oliver Twist",
    "author_id": "1",
    "pages": "700",
    "language": "English",
    "genre": "Mystery",
    "description": "Oliver Twist; or, The Parish Boy's Progress, is the second novel by English author Charles Dickens. It was originally published as a serial from 1837 to 1839 and as a three-volume book in 1838.[1] The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family."
}
```

#### Response (Status: 404 Not Found)

```
{
    "name": "Not Found",
    "message": "Book not found",
    "code": 0,
    "status": 404,
    "type": "yii\\web\\NotFoundHttpException"
}
```

### Method DEL /books

Description: Books update by id.

URL: https://api-books.loc/books/delete/{id}/

HTTP Method: DEL

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
DEL https://api-books.loc/delete/1/
```

#### Response (Status: 200 OK)

```
{
    "message": "Book deleted successfully"
}
```

#### Response (Status: 404 Not Found)

```
{
    "name": "Not Found",
    "message": "Book not found",
    "code": 0,
    "status": 404,
    "type": "yii\\web\\NotFoundHttpException"
}
```

### Method GET /books

Description: Get a list of all books.

URL: https://api-books.loc/books/

HTTP Method: GET

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
GET https://api-books.loc/books/
```

#### Response (Status: 200 OK)

```
[
    {
        "id": 1,
        "title": "Oliver Twist",
        "author_id": "1",
        "pages": "700",
        "language": "English",
        "genre": "Mystery"
    },
    {
        "id": 2,
         "title": "The Old Man and the Sea",
        "author_id": "2",
        "pages": "700",
        "language": "English",
        "genre": "Literary fiction"
    }
]
```

### Method GET /books

Description: Get a list of all books by search and author ids.

URL: https://api-books.loc/books/filter-books/?search='your_text'&author[]={id}

HTTP Method: GET

#### Request parameters:

**search** (optional) - Search string in book title and description <br>
**author[]** (optional) - Array of author IDs to be included in search results <br>

#### Status codes:

**200 OK** - Successful request <br>
**400 Bad Request** - Invalid request <br>
**404 Not Found** - Resource not found <br>

#### Example request:

```
GET https://api-books.loc/books/filter-books/?search=Oliver&author[]=1&author[]=2
```

#### Response (Status: 200 OK)

```
[
    {
        "id": 1,
        "title": "Oliver Twist",
        "author_id": "1",
        "pages": "700",
        "language": "English",
        "genre": "Mystery"
    }
]
```
