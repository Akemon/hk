$(function () {
    var score  = 0 ;
    var time = 60;

    $(".game img").click(function () {
        // console.log("hi stupid",event.target);
        var target = $(this).parent()[0].className;
        if(target&&target=="special"){
            alert("点中");
            score++;
            $(".score").text(score);
            start(score+2);
        }else{
            alert("stupid");
        }
    })

    function start(num){
        $(".game").html("");
        //方块数的长宽
        var temp = 400/num- 4;
        //方块数量
        var count = num*num;
        //生成随机数，确定目标位置
        var ranIndex = Math.floor(Math.random()*count);
        // console.log(ranIndex);
        //生成方块
        for(var i =0 ;i<count;i++){
            if(ranIndex==i){
                $(".game").append("<div class='special' style='width:"+temp+"px;height:"+temp+"px'></div>");
            }else{
                $(".game").append("<div style='width:"+temp+"px;height:"+temp+"px'></div>");
            }

        }
        for(var i =0 ;i<count;i++){
            var imgele = $("<img style='width:"+temp+"px;height:"+temp+"px'>").attr("src","../img/girls/"+(i+1)+".jpg");
            $(".game div").eq(i).append(imgele);
            imgele.click(function () {
                var target = $(this).parent()[0].className;
                if(target&&target=="special"){
                    alert("点中");
                    score++;
                    $(".score").text(score);
                    start(score+2);
                }else{
                    alert("stupid");
                }
            })

        }

    }
    function loadScore(){

        $.get("../server/scoreList.php",function (data) {
            // data  =  JSON.parse(data);
           // console.log(data);
           var ol = $(".right ol");
            ol.html("");
            if(data && data.length){
                $.each(data,function (index,item) {
                    ol.append("<li>"+item['nickname']+":"+item['mark']+"</li>");
                })
            }

            // if(data && data.length){
            //     var ol = $(".right ol");
            //     var count = data.length;
            //     // console.log(count);
            //     ol.html("");
            //     for(var i = 0;i<count;i++){
            //         var nickname = data[i]['nickname'];
            //         var score = data[i]['mark'];
            //         ol.append("<li>"+nickname+":"+score+"</li>");
            //     }
            // }
        });
    }
    loadScore();
    $(".flushBtn").click(function () {
        loadScore();
    });


    var timeTicking =  setInterval(function () {
        time--;
        if(time<0) {
           stopGame();
           return ;
        }
        $(".time").text(time);

    },100);

    function stopGame() {
        clearInterval(timeTicking);
        $(".game").hide();
        submitScore();
    }

    function submitScore() {
        if(score == 0){
            alert("0分你也好意思传过来,老子不存");
        }
        $.get("../server/uploadScore.php",
            {'nickname':'呵呵哒','score':score},
            function (data) {
            console.log(data);
                if(data && data.code ==1 ){
                    loadScore();
                }else{
                    alert(data.message);
                }
            })
    }

    $('.cancelLogin').click(function () {

    })

})