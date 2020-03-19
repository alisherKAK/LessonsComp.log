<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{php}echo config('app.name'){/php}</title>
    <link rel="stylesheet" href="http://lessonscomp.log/style.css">
</head>
<body>
<a href="/" class="link">Index</a>
<a href="/books" class="link">Books</a>
<a href="/books/create" class="link">Create Book</a>
<hr>
{block name='content'}{/block}

</body>
</html>