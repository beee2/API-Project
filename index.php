<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie APP</title>

  <!-- Awesome Font Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- CSS Style Link -->
  <link rel="stylesheet" href="/movie_api/css/reset.css"/>
  <link rel="stylesheet" href="/movie_api/css/style.css"/>
  <link rel="stylesheet" href="/movie_api/css/media.css"/>

</head>
<body>

<div class="indexWrap">
  <header class="header center"></header>
 
  <div class="searchWrap center">
    <div class="loading hidden">
      <img src="/movie_api/img/loading.gif" alt="">
    </div>
    <div class="search-box">
      <input type="text" placeholder="영화 제목을 입력해주세요" class="searchInput"><button type="button" class="sendBtn"><i class="fa fa-search"></i></button>
    </div>
  </div>
  <!-- end of searchWrap -->


  <div class="container clear"></div>
  <!-- end of container -->

  <div class="numContainer">
    <div class="numBtns">
      <button type="button" class="pageNum first"><i class="fa fa-angle-double-left"></i></button>
      <button type="button" class="pageNum prev"><i class="fa fa-angle-left"></i></button>
      <button type="button" class="pageNum" value="1">1</button>
      <button type="button" class="pageNum" value="2">2</button>
      <button type="button" class="pageNum" value="3">3</button>
      <button type="button" class="pageNum" value="4">4</button>
      <button type="button" class="pageNum" value="5">5</button>
      <button type="button" class="pageNum next"><i class="fa fa-angle-right"></i></button>
      <button type="button" class="pageNum last"><i class="fa fa-angle-double-right"></i></button>
    </div>
  </div>
  <!-- end of Number container -->
</div>
<!-- end of indexWrap -->
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/movie_api/js/recent.js"></script>
  <script src="/movie_api/js/custom.js"></script>
  <script src="/movie_api/js/search.js"></script>
</html>