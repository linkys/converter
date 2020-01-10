<?php include 'partials/header.php' ?>

<div class="row">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="/" class="brand-logo center">USD Converter</a>
            </div>
        </div>
    </nav>
</div>

<div class="container">

    <div class="row">
        <form class="col s12 form-converter" method="POST" action="/convert">
            <div class="row">
                <div class="input-field col s4 offset-s4">
                    <input id="usd" type="text" name="amount" class="validate" required>
                    <label for="usd">USD</label>
                </div>
                <button class="waves-effect waves-light btn-large" type="submit">Convert</button>
            </div>
        </form>
    </div>

    <div class="row currencies-list">

    </div>
</div>

<?php include 'partials/footer.php'?>