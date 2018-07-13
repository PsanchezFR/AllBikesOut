<form action="search" method="post" class="input-group col-auto col-md-6 mx-auto mt-3">
    <input class="form-control py-2 border-right-0 border" name="search" type="search" value="search" id="example-search-input">
    <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border" name="submit" type="submit">
                    <i class="fa fa-search"></i>
                </button>
    </span>
</form>
<div class="border col-11 col-md-5 mx-auto h-90">
    <?php
    if(isset($_POST['search'])) {
        $request = $bdd->prepare("SELECT * FROM velo WHERE id_velo LIKE  :searchInput");
        $valueToSearch = $_POST['search'] . '%';
        $request->bindParam('searchInput', $valueToSearch, PDO::PARAM_STR);
        $velos = $request->execute();
        $velos = $request->fetchAll(PDO::FETCH_CLASS, 'model\velo');

        foreach ($velos as $key => $value){
            echo "<a href='/show/$value->id_velo' class='border col-auto d-flex align-items-center' style='min-height: 40px'>";
            echo "<i class='fas fa-bicycle col-2 fa-2x'></i>";
            echo "<p class='m-0 col-6'>$value->id_velo</p>";
            echo "<div class='col-3'>";
            echo "<i class='fas fa-star '></i>";
            echo "<i class='fas fa-star'></i>";
            echo "<i class='fas fa-star-half-alt'></i>";
            echo "<i class='far fa-star'></i>";
            echo "<i class='far fa-star'></i>";
            echo "</div>";
            echo "<i class='fas fa-chevron-right col-1 fa-2x'></i>";
            echo "</a>";
        }

        $_SESSION['velo_id'] = $value->id_velo;
    }
           ?>
</div>
