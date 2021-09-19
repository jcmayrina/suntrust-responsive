
    <section class="condounit">
        <div class="unit">
          <div class="header">
            Other Models
          </div>
          <div class="container">
            <?php 
            foreach($product_shuffle as $item):
              if($item['unit_id']!=$item_id):
            ?>
            <div class="box" onclick="location.href='<?php printf('%s?unit_id=%s','unit.php',$item['unit_id']);?>'">
              <div class="unitpic">
                <?php 
                $picture = $item['unit_gallery'];
                $pic_separated = (explode(',',$picture));
                ?>
                <img src="<?php echo $pic_separated[0];?>"
                alt="<?php 
                echo $item['unit_property']??'Unknown';
                ?>">
                <div class="overlay"><div class="content">
                 <ul>
                   <li>Typical Floor Area: <?php 
                echo $item['unit_floor_area']??'Unknown';
                ?></li>
                   <li>Starts at ₱ <?php 
                echo $item['unit_price']??'Unknown';
                ?></li>
                 </ul>
               </div></div>
              </div>
              <div class="details">
                <span><h1><?php 
                echo $item['unit_name']??'Unknown';
                ?></h1></span>
                <h5 class="card-title"><?php 
                echo "₱".$item['unit_price']??'Unknown';
                ?></h5>
                <p class="card-text"><?php 
                echo $item['unit_address']??'Unknown';
                ?>
                </p>
              </div>
            </div>
            <?php 
            endif;
            endforeach;
            ?>
          </div>
        </div>
      </section>