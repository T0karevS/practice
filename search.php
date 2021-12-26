<?php
                 
                 if(isset($_POST['submit']))
                 {
                     $db = new PDO( "mysql:host = localhost;dbname=knigiru", "root", "root");
                     $search = explode(" ", $_POST['search']);
                     $count = count($search);
                     $array = array();
                     $i = 0;
                     foreach($search as $key):
                     {
                        $i++;
                        if($i < $count) $array[] = " CONCAT (`title`, `author`) LIKE '%".$key."%' OR "; else $array[] = " CONCAT (`title`, `author`) LIKE '%".$key."%' ";
                        $query = $db->query(" SELECT * FROM `knigi` WHERE ".implode(" ", $array));
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        while($row = $query->fetch())
                        ?>
                        <li><p class="title">'.$row['title'].'</p><p class="author">"'.$row['author'].'"</p><a href="'.$row['link'].'"> <img src="'.$row['image'].'" ></a></li>
                        <?  
                     }endforeach;           
                 }
                 ?> 