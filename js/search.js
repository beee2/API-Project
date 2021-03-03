$(function(){
  var searchResult=$(".searchInput").val();
    function searchMovie(){
      if(!searchResult){
        alert("검색어를 입력해 주세요.");
        return false;
      }
      location.href="/movie_api/pages/search.php?key="+searchResult;
    }

    $(".sendBtn").click(function(){
      $(".loading").removeClass(".hidden");
      searchMovie();
      $(".loading").addClass(".hidden");
    });

    //press enter
    document.addEventListener("keydown",function(e){
      const keyCode=e.keyCode;
      if(keyCode == 13) {
        $(".loading").removeClass(".hidden");
        searchMovie();
        $(".loading").addClass(".hidden");
      }
    });

  var searchValue=document.location.href.split("=")[1];
  var decodeValue=decodeURI(searchValue);
  console.log(decodeValue);

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
        location.href="/movie_api/index.php";
      }
       let itemContents=[];
        $.each(obj.items, function(i, item){
          //console.log(item.title);
          let itemHTML= `<div class="movie_box">
                          <img src="${item.image}" alt=""/>
                          <h2>${item.title}</h2>
                          <p>${item.director}</p>
                          <p>${item.pubDate}</p>
                          <p>${item.userRating}</p>
                        </div>`;
           itemContents.push($(itemHTML).get(0));
        });
      $(".wrap").append(itemContents);
    },
  });
});