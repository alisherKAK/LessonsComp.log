{extends file='layouts/main.tpl'}

{block name='content'}
<form action="{if $book}/books/update/{$book->id}{else}/books/create{/if}" method="post">
    <div>
        <label for="name">Name</label><br>
        <input type="text"
               name="name"
               value="{$book->name}"
               placeholder="Enter name"
               required>
    </div>
    <button type="submit" class="button">Save</button>
</form>
{/block}