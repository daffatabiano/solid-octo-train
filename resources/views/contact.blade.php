<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact page</title>
</head>
<body>
     <nav>
        <ul>
            <li>
                <a href="/about">about</a>
        </li>
            <li>
                <a href="/blog">blog</a>
        </li>
            <li>
                <a href="/contact">contact</a>
        </li>
    </ul>
    </nav>
    <form action="contact">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label for="email" >Email:</label>
        <input type="email" name="email " id="email">
        <label for="phone" >Phone Number:</label>
        <input type="number" name="phone" id="phone">
        <button type="submit">Submit</button>        
    </form>
</body>
</html>