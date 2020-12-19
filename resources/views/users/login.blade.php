<center>
    <form method="post" action="{{route('login')}}">
        email:  <input type="email" name="email" required/>
        <br/>
        password: <input type="password" name="password" required/>
        <br/>
        <br/>
        <input type="submit" value="register" name="submit" />
        <br/>
        {{csrf_field()}}
    </form>
</center>