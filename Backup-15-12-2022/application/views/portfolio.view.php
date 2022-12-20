<?php require "components/header.component.php"; ?>
<?php require "components/nav.component.php"; ?>
<?php
require 'application/models/DbConnect.php';
$pdo = DbConnect::getConnection();
?>
    <main>

        <div class="photo-items">
            <div> <h2>Портфолио</h2> <br> </div>

            <div class="item-header"><h3> Портреты</h3><br> </div>
            <?php
            $query_img = "SELECT `img_address` FROM `portraits`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>

            <div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
            
                <div class="img-item">
                     <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
                </div>
END;
                }
                ?>
            </div>


            <div class="item-header"><h3> Пейзаж</h3></div>
            <?php
            $query_img = "SELECT `img_address` FROM `paysage`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>

            <div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

                <?php

                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
            
                <div class="img-item">
                     <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
                </div>
END;
                }
                ?>
            </div>

            <div class="item-header"><h3> Репортаж </h3></div>

            <?php
            $query_img = "SELECT `img_address` FROM `reportage`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>
            <div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
            
                <div class="img-item">
                     <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
                </div>
END;
                }
                ?>
            </div>

            <div class="item-header"><h3>Интерьер</h3></div>
            <?php
            $query_img = "SELECT `img_address` FROM `interior`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>
            <div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

                <?php

                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
            
                <div class="img-item">
                     <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
                </div>
END;
                }
                ?>

            </div>



        </div>



    </main>
<?php require "components/footer.component.php"; ?>