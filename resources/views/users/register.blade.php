<center>
    <form method="post" action="{{route('register')}}" enctype="multipart/form-data">
        Name:  <input type="text" name="name" required/>
        <br/>
        age:  <input type="number" step="1" min="10" name="age" required/>
        <br/>
        email:  <input type="email" name="email" required/>
        <br/>
        password: <input type="password" name="password" required/>
        <br/>
        Re-type password: <input type="password" name="retype-password" required/>
        <br/>
        <label>gender:</label>
        <select name="gender" required/>
            <option value="male"> MALE </option>
            <option value="female"> FEMALE </option>
        </select>
        <br/>
        Country:  <input type="text" name="country">
        <br/>
        City:  <input type="text" name="city">
        <br/>
        Phone:  <input type="text" name="phone" required/>
        <br/>
        Home Phone:  <input type="text" name="home_phone">
        <br/>
        Address:  <input type="text" name="address">
        <br/>
        photo:  <input accept="image/*" type="file" name="photo" />
        <br/>
        <br/>
        <input type="submit" value="register" name="submit" />
        <br/>
        {{csrf_field()}}
    </form>
</center>