<!DOCTYPE html>
<html>
    <body>
        <h1>Yer daily pirate phrases</h1>
        <p><?= $phrase ?></p>
        <p><a href="<?= $base_url ?>pirate">I want another random one</a></p>
        <p>or</p>
        <form method="get" action="">
            <label for="index">Choose a phrase by number:</label>
            <input name="index" type="text"/>
            <button type="submit">Go!</button>
        </form>
        <p><a href="<?= $base_url ?>home">Back to home</a></p>
        <p>
            <small>
                All random phrases generated by Dummy Text Generator Plugin for PHPStorm
            </small>
        </p>
    </body>
</html>