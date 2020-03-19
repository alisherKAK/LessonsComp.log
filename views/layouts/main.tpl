<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$app['name']}</title>
    <link rel="stylesheet" href="http://lessonscomp.log/style.css">
</head>
<body>
<a href="/" class="link">Index</a>
<a href="/books" class="link">Books</a>
{if $auth == true}
<a href="/books/create" class="link">Create Book</a>
{/if}
{if $auth == true}
    <a href="/logout" class="link">Logout</a>
    <labe>{$user->username}</labe>
{else}
    <a href="/login" class="link">Login</a>
{/if}
<hr>
{block name='content'}{/block}

</body>
</html>