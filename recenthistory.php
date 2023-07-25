<h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  
                <?php 
                $cn=0;
                foreach($ress as $r1): ?>

                <div class="post-item clearfix">
                    <img src="uploads/pandemic/<?php echo $r1['attachment'] ?>" alt="">
                    <h4><a href="historycontent.php?id=<?php echo $r1['id']; ?>"><?php echo $r1['pan_name'] ?></a></h4>
                    <time datetime="2020-01-01"><?php echo $r1['createdate'] ?></time>
                  </div>
                    
                  <?php
                  $cn++;
                  if($cn==5)
                    break;
                
                endforeach; ?>
