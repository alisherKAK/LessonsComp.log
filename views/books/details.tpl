{extends file='layouts/main.tpl'}

{block name='content'}
<a href="/books/update/{$book->id}" class="link">Edit</a>
<a href="/books/delete/{$book->id}"
   class="link"
   onclick="event.preventDefault(); document.getElementById('delete-{$book->id}').submit()">
    Delete
</a>
<form action="/books/delete/{$book->id}" method="post"
      style="display: none"
      id="delete-{$book->id}"></form>
<table border="1" cellpadding="0">
    <tr>
        <td>Id</td>
        <td>{$book->id}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{$book->name}</td>
    </tr>
</table>
{/block}