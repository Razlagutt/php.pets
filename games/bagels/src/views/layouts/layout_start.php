<div class="row mt-3">
    <div class="col p-3">
        <h1>Welcome To Bagels Game!</h1>
        <h2>Bagels, a deductive logic game.</h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>I am thinking of a 3-digit number. Try to guess what it is.</p>
        <p>Here are some clues:</p>
    </div>
</div>
<div class="row">
    <div class="col-1">When I say:</div>
    <div class="col-4">That means:</div>
</div>
<div class="row">
    <div class="col-1">Pico</div>
    <div class="col-4">One digit is correct but in the wrong position.</div>
</div>
<div class="row">
    <div class="col-1">Fermi</div>
    <div class="col-4">One digit is correct and in the right position.</div>
</div>
<div class="row">
    <div class="col-1">Bagels</div>
    <div class="col-4">No digit is correct.</div>
</div>
<div class="row mt-3">
    <form action="/src/views/layouts/layout_game.php" method="get" class="col-1 d-grid">
        <button type="submit" class="btn btn-primary">Start!</button>
    </form>
</div>