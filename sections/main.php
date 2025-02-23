<main>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php
        var_dump($data);
        ?>
    </pre>
    <section>
        <hgroup>
            <h3>La proxima peli de marvel es: <?= $data['title'] ?>, se estrena en <?= $data['days_until'] ?> dias</h3>
            <!-- valido para php 8 <h3>La proxima peli de marvel es: <?= $data['title'] ?> - <?= $until_message ?></h3> -->
            <p>La fecha de estreno es: <?= $data['release_date'] ?></p>
            <p>La siguiente es: <?= $data['following_production']["title"] ?></p>
            <p>La sinopsis es: <?= $data['overview'] ?></p>
            <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"] ?>"
                style="border-radius: 16px;"
                width="300" srcset="">
        </hgroup>

    </section>
</main>