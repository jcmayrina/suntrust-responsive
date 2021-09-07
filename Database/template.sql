/* SQL Commands Template */

/* Inserting to the table */
insert into unit (unit_property,unit_name,unit_floor_area,unit_price,unit_details,unit_yt_link,unit_gallery	
)
VALUES ('Suntrust Amadea','Studio','24sqm','2,800,000',
'Floor Finishes: Ceramic tiles?Kitchen: Custom built under counter kitchen cabinets (overhead cabinets not included), with Provision for Rangehood?Toilet & Bath: Unglazed Ceramic Tiles',
'<iframe width="560" height="315" src="https://www.youtube.com/embed/OLeetf3A35k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
'./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO sleeping area _ living.jpg,./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO sleeping area _ living 1.jpg,./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO kitchen.jpg');


/* Selecting from the table */
SELECT * FROM unit WHERE unit_id=2

/* Updating the table */
UPDATE unit
SET unit_property='Asmara';

/* Deleting from the table */
DELETE from unit
WHERE unit_id=1;

/* Ordering the table (Ascending) */
SELECT * FROM unit ORDER BY unit_id ASC 
/* Ordering the table (Descending) */
SELECT * FROM unit ORDER BY unit_id DESC

/* Selecting from database and showing to website */
<?php 
      $sql = "SELECT * FROM unit;";
      $result = mysqli_query($conn,$sql);
      $resultcheck = mysqli_num_rows($result);

      if($resultcheck>0){
        while($row = mysqli_fetch_assoc($result)){
          echo $row['unit_property']."<br>";
        }
      }
?>