<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <div class="jumbotron">
    <form method="GET">
    <h1 class="display-4">Calculate the roman nummeral</h1>
    <p class="lead">Convert a number to a roman nummeral.</p>
    <hr class="my-4">
    <div class="form-group">
        <label for="number">Ooh exciting! What a MCCCXXXVII converter huh?</label>
        <input name="number" type="number" class="form-control" id="number" placeholder="Type a number.. any number">
    </div>
    <?php if(isset($number)){?>
        <div class="alert alert-primary" role="alert">
            <?php $response->send(); ?>
        </div>
    <?php } ;?>
    <p class="lead">
        <button class="btn btn-primary btn-lg" href="#" role="button">Convert the number</button>
    </p>
    </form>
    </div>
</div>