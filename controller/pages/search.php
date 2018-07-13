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
        $request = $bdd->prepare("SELECT id_velo FROM ve_to_de");
        $request->execute();
        $USER = $request->fetchObject('model\User');

    //    <div class="border col-auto d-flex align-items-center " style="min-height: 40px">
    //            <i class="fas fa-bicycle col-2 fa-2x"></i>
    //            <p class="m-0 col-6">1020</p>
    //            <div class="col-3">
    //                <i class="fas fa-star "></i>
    //                <i class="fas fa-star"></i>
    //                <i class="fas fa-star-half-alt"></i>
    //                <i class="far fa-star"></i>
    //                <i class="far fa-star"></i>
    //            </div>
    //        <i class="fas fa-chevron-right col-1 fa-2x"></i>
    //    </div>
           ?>
</div>
