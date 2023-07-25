<h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  
                <?php 
                $cn=0;
                foreach($ress as $r1): ?>

                <div class="post-item clearfix">
                    <img src="uploads/selfaw/<?php echo $r1['image'] ?>" alt="">
                    <h4><a href="selfaware.php"><?php echo $r1['title'] ?></a></h4>
                    <time datetime="2020-01-01"><?php echo $r1['creationdate'] ?></time>
                  </div>
                    
                  <?php
                  $cn++;
                  if($cn==5)
                    break;
                
                endforeach; ?>
