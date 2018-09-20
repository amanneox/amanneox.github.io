<nav>
   <div ng-controller="MyCtrl" class="nav-wrapper">
      <a style="display:block" href="#" data-activates="slide-out" class="button-collapse"><i class="icon-menu"></i></a>
      <form action="search.php" method="GET">
      <ul id="search" class="">
         <input id="box" ng-model="query" type="text"  name="query"placeholder="Search">
      </ul>
</form>
   </div>
</nav>

<header>
   <ul id="slide-out" class="side-nav">
      <li>
         <div class="user-view">

            <a href="index.php"><img class="circle" src="img/myavatar.svg"></a>
            <a href="#!"><span class=" name">Aman Adhikari</span></a>
            <a href="#!"><span class=" email">amanadhikari2@gmail.com</span></a>
         </div>
      </li>
      <li><a href="index.php"><i class="icon-home"></i>Home</a></li>
      <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//homeofcodes.ml"><i class="icon-share"></i>Share</a></li>
      <li>
         <div class="divider"></div>
      </li>
      <li><a class="subheader">Follow me</a></li>
      <div class="row">
         <div class="col sm2 m4">
            <li><a href="https://twitter.com/amanneox?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false" data-show-screen-name="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
         </div>
         <div class="col sm2 m4">
            <li><iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Famanneox&width=78&height=65&layout=button&size=large&show_faces=true&appId=626691377529332" width="78" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></li>
         </div>

      </div>
      <div id="brand">
         <span>HomeofCodes</span>
      </div>
   </ul>
</header>
<script>

</script>
