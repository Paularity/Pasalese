<?php 
$page_title = "Post services";
include "header.php";
?>
<section class="pasalese">

    <div class="post">
        <div class="search-filter">
            <div class="categories">
                <button class="btn-category">Search</button>
                <input type="text" id="category" name="category" placeholder="Pasalese Experts name">
            </div>
         
            <div class="filter">
                
                <button class="btn-filter">Filter</button>
                <input class="range" type="text" placeholder="₱300"><span> to </span>
                <input class="range" type="text" placeholder="₱500">
            </div>
            <div class="radio-category">
                <h2>Select service category</h2>
                <div><input type="radio" name="dot-checked"><span>&nbsp;House cleaning</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Electrical wiring</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Plumbing</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Roofing repair</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Ceiling installtion</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Faucet installation/repair</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Plumbing</span></div>
                <div><input type="radio" name="dot-checked"><span>&nbsp;Furniture repair</span></div>

            </div>
        </div>
       
        <div class="service">
            <div class="service-wrapper">
                <div class="post-service ">
                    <img src="../assets/services/faucet-install.PNG" alt="" >
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Jaime Ancheta</span>
                    <p>faucet installation services</p>
                    <span>₱ 420</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>

                <div class="post-service ">
                    <img src="../assets/services/electrical-wiring.PNG" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Raven dale </span>
                    <p>Aircon cleaning services</p>
                    <span>₱ 2500</span>
                    <button class="btn-request" ><a href="../html/pasalese-post-details.php">Request</a></button>
                    </div>
                    </div>
                </div>

                <div class="post-service ">
                    <img src="../assets/services/tiles-installation.jpg" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Rachel Rivera</span>
                    <p>Tiles installation</p>
                    <span>₱2000</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>
                <div class="post-service ">
                    <img src="../assets/services/aircon-repair.PNG" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Jake Viovicente </span>
                    <p>aircon repair services</p>
                    <span>₱ 1200</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>
                <div class="post-service ">
                    <img src="../assets/services/ceilling-install.PNG" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Bomifacio Medina </span>
                    <p>Ceilling install services</p>
                    <span>₱ 1800</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>
                <div class="post-service ">
                    <img src="../assets/services/grease-trap.PNG" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Marvic Diaz </span>
                    <p>Grease trap services</p>
                    <span>₱ 600</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>

                <div class="post-service ">
                    <img src="../assets/services/roofing-repair.jpg" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Raven dale </span>
                    <p>Roofing repair services</p>
                    <span>₱ 550</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>

                <div class="post-service ">
                    <img src="../assets/services/faucet-repair.PNG" alt="">
                    <div class="flex">
                    <div >
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Jaime Ancheta </span>
                    <p>Faucet repair services</p>
                    <span>₱ 600</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>

                <div class="post-service ">
                    <img src="../assets/services/faucet-install.PNG" alt="">
                    <div class="flex">
                    <div>
                    <img src="../images/default.jpg" alt="" class="default-profile" >
                    </div>
                    <div>
                    <span>Raven dale services</span>
                    <p>faucet installation</p>
                    <span>₱ 750</span>
                    <button class="btn-request">Request</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include "footer.php";
?>
