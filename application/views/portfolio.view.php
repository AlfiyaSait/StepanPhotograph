<?php require "components/header.component.php"; ?>
<?php require "components/nav.component.php"; ?>
<?php
require 'application/models/DbConnect.php';
$pdo = DbConnect::getConnection();
?>
    <main>
    

        <div class="photo-items">        
            <div class="item-header">Портреты </div>
            <?php
            $query_img = "SELECT `img_address` FROM `portraits`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>

            <div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,400px)); gap: 2rem">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
                   
                    <div class="img-item" style="background: url('$block_img[img_address]') center no-repeat;
                    background-size:cover; height: 35rem">
                    </div>               
END;
                }
                ?>
            </div>


            <div class="item-header">Пейзаж</div>
            <?php
            $query_img = "SELECT `img_address` FROM `paysage`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>

            <div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,400px)); gap: 2rem">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
                   
                    <div class="img-item" style="background: url('$block_img[img_address]') center no-repeat;
                    background-size:cover; height: 35rem">
                    </div>               
END;
                }
                ?>
            </div>

            <div class="item-header">Репортаж </div>

            <?php
            $query_img = "SELECT `img_address` FROM `reportage`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>
            <div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,400px)); gap: 2rem">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
                
                    <div class="img-item" style="background: url('$block_img[img_address]') center no-repeat;
                    background-size:cover; height: 35rem">
            </div> 
END;
                }
                ?>
            </div>

            <div class="item-header">Интерьер</div>
            <?php
            $query_img = "SELECT `img_address` FROM `interior`";
            $result_img = $pdo->query($query_img);
            //d( $result_img->fetchAll() );
            ?>
             <div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,400px)); gap: 2rem">

                <?php
                while ( $block_img = $result_img->fetch() ) {
                    echo <<<END
                
                    <div class="img-item" style="background: url('$block_img[img_address]') center no-repeat;
                    background-size:cover; height: 35rem">
            </div> 
END;
                }
                ?>

            </div>



        </div>



    </main>
<?php require "components/footer.component.php"; ?>