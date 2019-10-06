<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="/public/style.css">
    <title>Mini MVC</title>
</head>
<body>
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Questo è un mini MVC.</h1>
                <h2 class="subtitle">Un piccolo progetto in PHP per dimostrare il pattern architetturale Model-View-Controller. La lista dei todo è renderizzata server-side, non c'è persistenza.</h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">TODOs</p>
                            <form>
                                <?php foreach ($todos as $todo): ?>
                                    <div class="field">
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox"> <span><?php echo $todo; ?></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column"></div>
            </div>
        </div>
    </section>

</body>
</html>
