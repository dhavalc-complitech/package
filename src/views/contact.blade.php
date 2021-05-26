<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

    </head>
    <body class="antialiased">
        <h1>Contact us any time</h1>

        <form action="{{route('contact')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your name">
            <input type="email" name="email" placeholder="Your email">
            <textarea name="message" cols="10" rows="2" ></textarea>
            <input type="submit"  name="submit">
        </form>
    </body>
</html>
