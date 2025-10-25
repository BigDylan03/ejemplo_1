<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
        <section id="registro" class="section-card">
        <h1>Registrate</h1>
        <form class="form">
            <p class="message">Signup now and get full access to our app. </p>
                <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Firstname</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Lastname</span>
                </label>
            </div>  
                    
            <label>
                <input required="" placeholder="" type="email" class="input">
                <span>Comentario</span>
            </label> 
                
            <label for=>
                <input type="textarea" class="input">
            </label>
            <button class="submit">Submit</button>
            <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
        </form>
    </section>
</body>
</html>