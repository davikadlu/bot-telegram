<div>
    <form action="/user/account" method="post">
        @csrf

        <input type="text" name="name" placeholder="username">

        <input type="text" name="password" placeholder="passwod">

        <input type="text" name="email" placeholder="email">
        <input type="text" name="category" placeholder="category">

        <button type="submit">press me</button>
    </form>
</div>