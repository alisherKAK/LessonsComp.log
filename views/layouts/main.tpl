<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{php}echo config('app.name'){/php}</title>
</head>
<body>
<a href="/">Index</a>
<a href="/books">Books</a>
<a href="/books/create">Create Book</a>
<br/>
{block name='content'}{/block}

</body>
</html>