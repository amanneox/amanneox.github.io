<!doctype html>

<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  <title>amdb</title>

  <!-- Flatdoc -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js'></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/flatdoc.js'></script>

  <!-- Flatdoc theme -->
  <link  href='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/style.css' rel='stylesheet'>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/script.js'></script>

  <!-- Meta -->
  <meta content="Your Project" property="og:title">
  <meta content="Your Project description goes here." name="description">

  <!-- Initializer -->
  <script>
    Flatdoc.run({
      fetcher: Flatdoc.github('')
    });
  </script>
</head>
<body class='no-literate' role='flatdoc'>

  <div class='header'>
    <div class='left'>
      <h1>AMDB</h1>
      <ul>
        <li><a href='https://github.com/amanneox/amdb'>View on GitHub</a></li>
        <li><a href='https://github.com/amanneox/amdb/issues'>Issues</a></li>
      </ul>
    </div>
    <div class='right'>
      <!-- GitHub buttons: see http://ghbtns.com -->
      <iframe src="http://ghbtns.com/github-btn.html?user=USER&amp;repo=REPO&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
    </div>
  </div>

  <div class='content-root'>
    <div class='menubar'>
      <div class='menu section' role='flatdoc-menu'>
        <ul><li id="root-item" class="level-0">
          <ul class="level-1" id="root-list"><li id="flatdoc-item" class="level-1"><a id="flatdoc-link" href="#project" class="level-1">All Movie Database</a>
      </li>
      <li id="flatdoc-item" class="level-2"><a id="flatdoc-link" href="#gettingstarted" class="level-2">Getting Started</a>
      </li>
      <li id="flatdoc-item" class="level-3"><a id="flatdoc-link" href="#howitworks" class="level-3">How It Works</a>
      </li>
      <li id="flatdoc-item" class="level-3"><a id="flatdoc-link" href="#extras" class="level-3">Markdown Extras</a>
      </li>
      </ul>
      </li>
      </ul>
      <br>
      <ul><li id="root-item" class="level-0">
        <ul class="level-1" id="root-list"><li id="flatdoc-item" class="level-1"><a id="flatdoc-link" href="#contribute" class="level-1">Contribute</a>
    </li>
    <li id="flatdoc-item" class="level-2"><a id="flatdoc-link" href="#getkey" class="level-2">Get Authorization Key</a>
    </li>
    <li id="flatdoc-item" class="level-3"><a id="flatdoc-link" href="#howitworks2" class="level-3">How It Works</a>
    </li>

    </li>
    </ul>
    </li>
    </ul>
<br>
      <ul><li id="root-item" class="level-0">
        <ul class="level-1" id="root-list"><li id="flatdoc-item" class="level-1"><a id="flatdoc-link" href="#misc" class="level-1">Misc</a>
    </li>
    <li id="flatdoc-item" class="level-2"><a id="flatdoc-link" href="#inspirations" class="level-2">Inspirations</a>
    </li>
    <li id="flatdoc-item" class="level-2"><a id="flatdoc-link" href="#attributions" class="level-2">Attributions</a>
    </li>
    <li id="flatdoc-item" class="level-2"><a id="flatdoc-link" href="#lisence" class="level-2">Lisence</a>
    </li>
    </ul>
    </li>
    </ul>

      </div>

</div>

    <div role='flatdoc-content' class='content'>

<h1 id="project">All Movie Database</h1>
<p>All Movie Database is a simple and easy REST API that contains over 5000 movie record, It's easy to access and returns a json response which can be easily parsed.</p>
<ul>
<li>Easy to access.
</li>
    <li>User-Friendly json response.
    </li>
        <li>Keep updating monthly.
        </li>
            <li>Free of cost.
            </li>
  <ul>
<p><em>Current Version:1.0</em><p>
<h2 id="gettingstarted">Getting started</h2>
<p>Accessing the API is easy and done by single HTTP/HTTPS request but however there are few variations of the request and the response you will get, for getting the record of a movie by it's name follow the example below replace the 'moviename' in request with your own movie tittle.</p>
  <pre><code>http://www.amdb.dx.am/movie/search.php?s=moviename</code></pre>
<p>You can also modify the request to get all the movies from a particular year, just replace the 'releasedate' with your own.</p>

  <pre><code>http://www.amdb.dx.am/movie/search.php?s=release</code></pre>
  <p>Or you can modify your response to get all the movies made by a production company.</p>

    <pre><code>http://www.amdb.dx.am/movie/search.php?s=production</code></pre>

<h2 id="howitworks">How It Works</h2>
<p>Working of the API is simple and user friendly you don't need an access code unless you want to be a moderator, Just make a HTTP/HTTPS request with the right syntax and it's done.</p>
<h2 id="extras">Extras</h2>
<p>If you want only one response that exactly matches your movie name.</p>
<pre><code>http://www.amdb.dx.am/movie/read_one.php?title=moviename</code></pre>
<h2 id="contribute">Contribute</h2>
<p>Contributions are great, It helps grow the database and make it more uselful for the users. To contribute you will be required to get an access key and a authorization code which is currently under progress.</p>

<h2 id="getkey">Get Authorization Key</h2>
<br>
     <a href="#" class="button">Get Key</a>
     <h2 id="howitworks2">How It Works</h2>
     <p>After creating a key you can simply post and submit movies details and improve the database.</p>

     <h2 id="inspirations">Inspirations</h2>
     <p>This project has been inspired by the amazing tmdb it's a great resource to get all the notes about a movie or anything that's related, And for users who want free access to movies data.</p>
     <ul>
     <li>https://www.themoviedb.org/?language=en.
     </li>

       <ul>
     <h2 id="attributions">Attributions</h2>
     <p>It's an open source project created by Aman Adhikari.</p>
     <h2 id="lisence">Lisence</h2>
     <p>Copyright 2017 Aman Adhikari<br>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
    </div>

</div>
</body>
</html>
