{extends file='layouts/main.tpl'}

{block name='content'}
    <div>
        <h2>Last three books</h2>
        {foreach $books as $book}
            <div>
                <a href="/books/{$book->id}" class="link">
                    {$book->name}
                </a>
            </div>
        {foreachelse}
            Not found
        {/foreach}
    </div>
{/block}