<?php

include "header.php";
 
?>
<br><br><br>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto border shadow p-4">
            <h2 class="text-center mb-4">Profile</h2>
            <hr />

          <div class="row mb-3">
               <div class="col-sm-4">First name</div>
               <div class="col-sm-8"><?= $_SESSION["first_name"] ?></div>
          </div>

          <div class="row mb-3">
               <div class="col-sm-4">last name</div>
               <div class="col-sm-8"><?= $_SESSION["last_name"] ?></div>
          </div>

          <div class="row mb-3">
               <div class="col-sm-4">Email</div>
               <div class="col-sm-8"><?= $_SESSION["email"] ?></div>
          </div>

          <div class="row mb-3">
               <div class="col-sm-4">Phone</div>
               <div class="col-sm-8"><?= $_SESSION["phone"] ?></div>
          </div>

          <div class="row mb-3">
               <div class="col-sm-4">Address</div>
               <div class="col-sm-8"><?= $_SESSION["address"] ?></div>
          </div>

          <div class="row mb-3">
               <div class="col-sm-4">Registered</div>
               <div class="col-sm-8"><?= $_SESSION["created_at"] ?></div>
          </div>


        </div>
    </div>
</div>
<br><br><br> 










<?php
include "footer.php";
?>