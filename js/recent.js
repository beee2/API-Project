$(function(){

  let currentPage=1;
  const pageNumLength = $(".numBtns button.pageNum").length;

  function getData(page){
    let getDatas=[];
    $.ajax({
      url:'https://yts.mx/api/v2/list_movies.json?sort_by=year&order_by=desc&limit=10&page=1' + page,
      success:function(data){
        //console.log(data.data.movies[0].title);
        for(let i=0;i<data.data.movies.length; i++){
          if(data.data.movies[i].title==''){
            //data.data.movies[i].title=='No Title';
            data.data.movies[i].medium_cover_image=='';
          }
          let recentHTML= `<div class="recent-movie-wrap">
                              <div class="recent-movies">
                                <div class="movie-img">
                                  <img src="${data.data.movies[i].medium_cover_image}" alt="">
                                </div>
                                <h3 class="movie-title">${data.data.movies[i].title}</h3>
                              </div>
                            </div>`;
                            getDatas += recentHTML;
        }
        $(".container").append(getDatas);
        $(".loading").removeClass(".hidden");
      }
    });
  }
  $(".loading").addClass(".hidden");
  getData();
  // $(".numBtns button.pageNum").click(function(){
  //   //let getLoad=$("/movie_api/img/loading.gif")
  //   let btnValue=Number($(this).attr('value'));
  //   //getLoad();
  //   $(".recent-movie-wrap").remove();
  //   $(".loading").show();
  //   getData(btnValue);

  //   let btnIdx=$(this).index();

  //   $(".numBtns button").removeClass("active");
  //   $(".numBtns button").eq(btnIdx-1).addClass("active");
  // });

  // $(".numBtns button.prev").click(function(){
  //   if(currentPage==1){
  //     return false;
  //   } else {
  //     $(".recent-movie-wrap").remove();
  //     getData(currentPage-1);
  //     $(".loading").show();
  //     $(".numBtns button").removeClass("active");
  //     $(".numBtns button").eq(currentPage).addClass("active"); 
  //   }
  // });

  
  // $(".numBtns button.next").click(function(){



  //   if(currentPage==pageNumLength){
  //     return false;
  //   } else {
  //     $(".recent-movie-wrap").remove();
  //     getData(currentPage+1);
  //     $(".loading").show();
  //     $(".numBtns button").removeClass("active");
  //     $(".numBtns button").eq(currentPage).addClass("active"); 
  //   }
  // });


  // $(".numBtns button").eq(1).trigger("click");

  $(document).ajaxComplete(function(){
    $(".loading").addClass(".hidden");
  });
});