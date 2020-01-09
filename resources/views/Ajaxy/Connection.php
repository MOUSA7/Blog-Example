<?php
/**
 * Created by PhpStorm.
 * User: Mousa
 * Date: 5/1/2019
 * Time: 05:14 ص
 */

   include ('db.php');


        $search= $_POST['search'];

         if(!empty($search)){   //اذا بش فاضية البحث

             $query ="SELECT * FROM posts WHERE title LIKE '%$search%' "; //اعطيني كل عنواين البوست
             $search_query = mysqli_query($conn,$query);

             if (!$search_query){   //اذا فش عنوان للبوست
                 die('Query_failed'.mysqli_error($conn));
             }
             while ($row = mysqli_fetch_array($search_query)){
             $brand = $row['title'];
?>
  <ul class="list-unstyled">
      <?php
      echo "<li> {$brand} in Comments</li>";
      ?>
  </ul>

        <?php }




}