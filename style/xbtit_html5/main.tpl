<!DOCTYPE >
<html>
<head>
  <title><tag:main_title /></title>
  <meta http-equiv="content-type" content="text/html; charset=<tag:main_charset />" />
  <link rel="stylesheet" href="<tag:main_css />?v=0.2" type="text/css" />
  <tag:more_css />
  <tag:main_jscript />
  <!--[if lte IE 7]>
  <style type="text/css">
  #menu ul {display:inline;}
  </style>
  <![endif]-->
</head>
<body>
  <header>
    <aside>
      <if:menu_isuser>
        <h5>Welcome <a href="/index.php?page=usercp&uid=<tag:user_userid />"><tag:menu_username /></a></h5>
        <div class="uploaded">
          &uarr; <tag:menu_useruploaded />
        </div>
        <div class="downloaded">
          &darr; <tag:menu_userdownloaded />
        </div>
        <div class="usermenu">
          <a href="/index.php?page=usercp&uid=<tag:user_userid />&do=pm&action=list&what=inbox">My Mail</a>
          <if:menu_isadmin>
          <a href="/index.php?page=admin&user=<tag:user_userid />&code=<tag:user_random />">Admin Panel</a>
          </if:menu_isadmin>
        </div>
        <a class="userlogin" href="/logout.php">Logout</a>
      <else:menu_isuser>
        <a class="userlogin" href="/login.php">Login</a>
      </if:menu_isuser>
    </aside>
    <nav>
      <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/index.php?page=viewnews">News</a></li>
        <if:menu_canupload>
        <li><a href="/index.php?page=upload">Upload New Torrent</a></li>
        </if:menu_canupload>
        <li><a href="/index.php?page=torrents">Torrents/Browse</a></li>
        <li><a href="/index.php?page=extra-stats">Stats</a></li>
        <if:menu_canusers>
        <li><a href="/index.php?page=users">Members</a></li>
        </if:menu_canusers>
      </ul>
    </nav>
  </header>
  <section>
    <tag:main_content />
  </section>
  <footer>
    <tag:main_footer />
  </footer>
</body>
</html>