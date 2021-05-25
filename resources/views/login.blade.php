<h1>login</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="login-form">
   <div>email: <input type="text" name=""></div>
   <div>password: <input type="password" name="password"></div>
   <div>password: <input type="submit" name="submit"></div>
</div>