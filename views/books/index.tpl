{extends file='layouts/main.tpl'}

{block name='content'}
<ul>
{foreach $books as $book}
<li>
        <a href="/books/{$book->id}" class="link">
                {$book->name}
        </a>
</li>
{/foreach}
</ul>
{/block}