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
  <header>

  </header>
 
  <div class="searchWrap center">
    <div class="loading">
      <img src="/movie_api/img/loading.gif" alt="">
    </div>
    <div class="search-box">
      <input type="text" placeholder="영화 제목을 입력해주세요" class="searchInput"><button type="button" class="sendBtn"><i class="fa fa-search"></i></button>
    </div>

      

  
</div>
  <!-- <script>
    $(function(){
      function searchMovie(){
        var searchResult=$(".searchInput").val();
        if(!searchResult){
          alert("검색어를 입력해 주세요.");
          return false;
        }
        location.href="/movie_api/search.html?key="+searchResult;
      }

      $(".sendBtn").click(function(){
        searchMovie();
      });

      //press enter
      document.addEventListener("keydown",function(e){
        const keyCode=e.keyCode;
        if(keyCode == 13) {
          searchMovie();
        }
      });
    });
  </script> -->
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/movie_api/js/recent.js"></script>
  <script src="/movie_api/js/custom.js"></script>
  <script src="/movie_api/js/search.js"></script>
</html>