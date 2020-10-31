<?php get_header(); ?>



<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <?php
        // Must be inside a loop.

        if (has_post_thumbnail())
        {
        ?>
          <figure>
            <?php
            the_post_thumbnail('full', ['class' => 'img-fluid', 'title' => 'Feature image']);
            ?>
          </figure>
        <?php
        }
        else
        {
          echo '<img src="' . get_bloginfo('stylesheet_directory')
            . '/images/img-not-found.png" class="img-fluid" />';
        }
        ?>
        <?php
        the_content();
        ?>

        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>George Washington</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>


        <div class="pt-5 mt-5">
          <h3 class="mb-5">6 Comments</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard bio">
                <img src="images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>

              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>


                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>

                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Categories</h3>
          <ul class="categories">
            <li><a href="#">Interior Design <span>(12)</span></a></li>
            <li><a href="#">Exterior Design <span>(22)</span></a></li>
            <li><a href="#">Industrial Design <span>(37)</span></a></li>
            <li><a href="#">Landscape Design <span>(42)</span></a></li>
          </ul>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Recent Blog</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Tag Cloud</h3>
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">house</a>
            <a href="#" class="tag-cloud-link">office</a>
            <a href="#" class="tag-cloud-link">building</a>
            <a href="#" class="tag-cloud-link">land</a>
            <a href="#" class="tag-cloud-link">table</a>
            <a href="#" class="tag-cloud-link">interior</a>
            <a href="#" class="tag-cloud-link">exterior</a>
            <a href="#" class="tag-cloud-link">industrial</a>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div>
    </div>
  </div>
</section> <!-- .section -->
<?php

get_footer(); ?>