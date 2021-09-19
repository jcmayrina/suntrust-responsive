
    <section class="condounit">
        <div class="unit">
          <div class="header">
            Other Models
          </div>
          <div class="container">
            <?php 
            foreach($product_shuffle as $item):
              if($item['house_id']!=$item_id):
            ?>
            <div class="box" onclick="location.href='<?php printf('%s?house_id=%s','house.php',$item['house_id']);?>'">
              <div class="unitpic">
                <?php 
                $picture = $item['house_gallery'];
                $pic_separated = (explode(',',$picture));
                ?>
                <img src="<?php echo $pic_separated[0];?>"
                alt="<?php 
                echo $item['house_property']??'Unknown';
                ?>">
                <div class="overlay"><div class="content">
                 <ul>
                   <li>Typical Floor Area: <?php 
                echo $item['house_floor_area']??'Unknown';
                ?></li>
                   <li>Starts at ₱ <?php 
                echo $item['house_price']??'Unknown';
                ?></li>
                 </ul>
               </div></div>
              </div>
              <div class="details">
                <span><h1><?php 
                echo $item['house_name']??'Unknown';
                ?></h1></span>
                <h5 class="card-title"><?php 
                echo "₱".$item['house_price']??'Unknown';
                ?></h5>
                <p class="card-text"><?php 
                echo $item['house_address']??'Unknown';
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