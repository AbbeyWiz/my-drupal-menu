<body>
  <!-- Start: Header -->
  <header id="header">
    <div class="container header">
      <div id="logo">
        <a href="#" title="Moyo &amp; Towo" alt="Moyo &amp; Towo"> Moyo &amp; Towo </a>
      </div>
      <!-- Start: Navigation -->
      <nav class="main">
        <ul id="menu-main-menu" class="nav">
          <li class="menu-item"><a href="#">Home</a></li>
          <li class="menu-item"><a href="#">Events</a></li>
          <li class="menu-item"><a href="#">Gallery</a></li>
          <li class="menu-item"><a href="#">Guestbook</a></li>

          <li class="menu-item  menu-item-has-children"><a href="#">Blog</a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="#">Towo's Poems</a></li>
              <li class="menu-item"><a href="#">Moyo's Poems</a></li>
              <li class="menu-item"><a href="#">Guest Poems</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#">Contact</a></li>
          <li>Social Share</li>

        </ul>
      </nav>
      <!-- End: Navigation -->
      <div class="clearfix"></div>
    </div>
  </header>
  <!-- End: Header -->

  <?php print render($page['content']); ?>


</body>
