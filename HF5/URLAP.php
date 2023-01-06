

<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>

<?php

if (!empty(isset($_POST['firstName']))) {
    echo $_POST['firstName'] . "<br>";

}else
{ echo "A first name mezo ures!<br>"; }

if (!empty(isset($_POST['lastName']))) {
    echo $_POST['lastName'] . "<br>";

}else
{ echo "A lastName mezo ures!<br>"; }

if (!empty(isset($_POST['email']) )) {
    echo $_POST['email'] . "<br>";

}else
{echo $_POST['email'] . "<br>";}

if ((isset($_POST['terms']))) {
    echo "el fogadta  a felteteleket!"."<br>";
}else{
    echo "Nem fogadta el a felteteleket!"."<br>";
}

if ((isset($_POST['attend']))){
    echo $_POST['attend'];

}else{
    echo "nem valasztot az attent-bol"."<br>";
}

if((isset($_POST['tshirt']))){
    echo "valasztot meretet. ".$_POST['tshirt']."<br>";
}else{
    echo "nem valasztot meretet."."<br>";
}



?>
