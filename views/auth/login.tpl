{extends file='layouts/main.tpl'}

{block name='content'}
<form method="post">
    <div>
        <label for="username">Username</label><br/>
        <input type="text" name="username"
               id="username"
               placeholder="Enter username">
    </div>
    <br/>
    <div>
        <label for="password">Password</label><br/>
        <input type="password" name="password"
               id="password"
               placeholder="Enter password">
    </div>

    <button type="submit" class="button">Login</button>
</form>
{/block}