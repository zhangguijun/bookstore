<!--BEGIN MENU RECURSION-->
                  <?php function menu($m,$i){ ?>
                    <?php if(!$m[$i]['hasSon'] && !$m[$i]['parent_id']){ ?>
                      <li>< a href=" "><?php echo $m[$i]['m_name'];?></ a></li>
                      <?php return; ?>
                    <?php } ?>
                    <?php if(!$m[$i]['hasSon'] && $m[$i]['parent_id']){ ?>
                      <ul class="dropdown-menu">
                        <li>< a href="product-list.html"><?php echo $m[$i]['m_name'];?></ a></li>
                      </ul>
                      <?php return;?>
                    <?php }?>
                    <?php if($m[$i]['hasSon'] && $m[$i]['parent_id']){?>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                          < a href="product-list.html"><?php echo $m[$i]['m_name'];?><i class="fa fa-angle-right"></i></ a>
                          <?php menu($m,$i+1);?>
                        </li>
                      </ul>
                      <?php return;?>
                    <?php }?>
                    <?php if($m[$i]['hasSon'] && !$m[$i]['parent_id']){?>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="product-list.html" href="product-list.html">
                          <?php echo $m[$i]['m_name'];?>
                          <i class="fa fa-angle-down"></i>
                        </ a>
                        <?php menu($m,$i+1);?>
                      </li>
                      <?php return;?>
                    <?php }?>
                  <?php }?>
                  <!--END MENU RECURSION FUNCTION-->
                  <?php for($i = 0; $i < count($menulist); $i++){ ?>
                  <?php if($menulist[$i]['parent_id'] == 0){ ?>
                    <?php menu($menulist,$i); ?>
                  <?php } ?>
                  <?php } ?>