<div class="container">
    <div class="row- row-cols-3">
        <?php foreach($movies as $movie) { ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $movie->movie_info($movie) ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>