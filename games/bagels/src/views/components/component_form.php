<form action="/game" method="post" class="row justify-content-center mt-3">
    <div class="col-3">
        <input name="game[guess][]" value="" type="text" maxlength="3" max="999" min="0" class="form-control" id="guess" placeholder="Type your guess...">
    </div>
    <div class="col-3 align-self-end d-grid">
        <button name="" type="submit" class="btn btn-primary">Did I guess?</button>
    </div>
</form>