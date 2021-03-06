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
  <link rel="stylesheet" href="/movie_api/css/media.css"/>
  <link rel="stylesheet" href="/movie_api/css/search_style.css"/>
  
</head>
<body>
  <header class="headerSearch">
    <div class="search-box">
      <input type="text" placeholder="영화 제목을 입력해주세요" class="searchInput"><button type="button" class="sendBtn"><i class="fa fa-search"></i></button>
    </div>
  </header>
  
  <div class="wrap center">
    <!-- <div class="movie_box">
      <img src="" alt="">
      <h2>제목 : </h2>
      <p>감독 : </p>
      <p>개봉일 : </p>
      <p>평점 : </p>
    </div> -->
  </div>
</body>

  
  <!-- <script>
    $(function(){

      var searchValue=document.location.href.split("=")[1];
      var decodeValue=decodeURI(searchValue);
      //console.log(decodeValue);

      $.ajax({
        type:"POST",
        url:"/movie_api/data/api.php",
        data: {
          search_value: decodeValue,
        },
        success:function(data){

          let obj=JSON.parse(data);
          //console.log(obj);
          //console.log(obj.items[0].title);
          if(obj.items.length == 0){
            alert("데이터가 없습니다.");
            location.href="/movie_api/index.html";
          }
          let itemContents=[];
          $.each(obj.items, function(i, item){
            //console.log(item.title);
            let itemHTML= `<div class="movie_box">
                            <img src="${item.image}" alt=""/>
                            <h2>${item.title}</h2>
                            <h3>(${item.subtitle})</h3>
                            <h4>${item.actor}</h4>
                            <p>감독 : ${item.director}</p>
                            <p>개봉 : ${item.pubDate}</p>
                            <p>평점 : ${item.userRating}</p>
                          </div>`;
              itemContents.push($(itemHTML).get(0));
          });
          $(".wrap").append(itemContents);
        },
      });
    });
  </script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/movie_api/js/recent.js"></script>
  <script src="/movie_api/js/custom.js"></script>
  <script src="/movie_api/js/search.js"></script>
</html> 