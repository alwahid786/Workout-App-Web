<!doctype html>
<html lang="en">

<head>
    <title>Requested Approval</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    img {
        height: 150px;
    }

    a button {
        /* padding: 8px; */
        border-radius: 10px;
        border: none;
        background-color: #e37048;
    }
</style>

<body class="main">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <section class="d-flex justify-content-center align-items-center " style="height:500px;">
        <div class="d-flex justify-content-center align-items-center flex-column ">
            <img class="py-4" src="http://localhost/workitpt_web/public/assets/images/d-logo.svg" alt="image">
            <h3 class="text-center py-3">We're evaluating your profile</h3>
            <p class="text-center">Your profile will be activated in 3 - 5 Working days, You will be notified about profile status through your provided email. </p>
            <a href="{{url('/logout')}}"><button class="text-light px-5 py-2">Logout</button></a>
        </div>
    </section>

</body>

</html>