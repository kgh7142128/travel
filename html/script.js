//變數設置
    var select = 1;
    var preSelect = 1;
    var Mpage = 13;
    var timer = null;
//Funtion設置
    function fnChange1(a) {
        // 取得選取的圖片編號並組成完成圖檔
        var filename = "images/pic_" + a.data.num + ".jpg"
        select = a.data.num;
        // 顯示圖片
        $("#show").attr("src", filename);
        // 呈現淡出動畫
        $("#show").hide().fadeIn(1000);
        $("#div" + select).addClass("addBorder");
        $("#div" + preSelect).removeClass("addBorder");
        preSelect = select;

    }
    function fnChange() {
        // 取得選取的圖片編號並組成完成圖檔
        $("#div" + preSelect).removeClass("addBorder");
        $("#div" + select).addClass("addBorder");
        var filename = "images/pic_" + select + ".jpg " 

        // 顯示圖片
        $("#show").attr("src", filename);
        // 呈現淡出動畫
        $("#show").hide().fadeIn(1000);
        preSelect = select;
    }
    // 往左鈕事件處理函式
    function fnPrev() {
        preSelect = select;
        if (select <= 1) {
            select = Mpage;
        }
        else {
            select -= 1;
        }
        fnChange();
    }
    // 往右鈕事件處理函式
    function fnNext() {
        preSelect = select;
        if (select >= Mpage) {
            select = 1;
        }
        else {
            select += 1;
        }
        fnChange();
    }
//JS運作區
$(document).ready(function(){
    //頁面內容變換
    $("#aside-section").click(function(e){
        var click_tag = e.target.getAttribute('id');
        switch (click_tag) {
           case "walk":
                $("#aside-flex").html(
                    `
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/三坑自然生態.jpg" class="aside-img1" id="pic_1">
                        <h3 ><a href="#" id="pic_1">三坑自然生態</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/五酒桶山步道.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">五酒桶山步道</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/石門山步道.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">石門山步道</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/石門水庫.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">石門水庫</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/竹圍漁港.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">竹圍漁港</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/角板山行館.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">角板山行館</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/虎頭山公園.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">虎頭山公園</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/許厝港溼地.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">許厝港溼地</a></h3>
                    </div>
                    <div class="aside-div-area" id="aside-div-area">
                        <img src="./img/walk/新溪口吊橋.jpg" class="aside-img1">
                        <h3 ><a href="#" id="street">新溪口吊橋</a></h3>
                    </div>
                    `
                ),
                $("#aside-div").html(
                    `
                    
                    `
                ),
                $("#aside-detil").html(
                    `
                    
                    `
                );
                break;
            case "tourism":
            $("#aside-flex").html(
                `
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/tourism/大溪老茶廠.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">大溪老茶廠</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/tourism/卡司蒂菈.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">卡司蒂菈</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/tourism/桃園酒廠.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">桃園酒廠</a></h3>
                </div>
                `
            ),
            $("#aside-div").html(
                `
                
                `
            );
                break;
            case "buy":
            $("#aside-flex").html(
                `
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/buy/大溪老街.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">大溪老街</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/buy/中原夜市.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">中原夜市</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/buy/中壢觀光夜市.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">中壢觀光夜市</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/buy/桃園觀光夜市.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">桃園觀光夜市</a></h3>
                </div>
                <div class="aside-div-area" id="aside-div-area">
                    <img src="./img/buy/興仁花園夜市.jpg" class="aside-img1">
                    <h3 ><a href="#" id="street">興仁花園夜市</a></h3>
                </div>             
                `
            ),
            $("#aside-div").html(
                `
                
                `
            );
                break;
        }
    });
    //頁面內容變換

    //下拉式表單
    $(".user-log-list").hover(function(){
        $(this).children(".option-cont").stop(true,true).slideDown("fast");
    },function () {
        $(this).children(".option-cont").stop(true,true).slideUp('slow');
    });
    //下拉式表單

    //輪播圖
    $("#div-select").empty();
    // 將預覽圖div1~div13新增到#div-select元素
    for (var i = 1; i <= 17; i++) {
        $("#div-select").append
            (
                "<div id='div" + i + "' class='round'></div>"
            );
        // 預覽圖區塊div1~div13新增click事件處理函式fnChange
        // 按下預覽圖會傳送num參數，此參數為圖片編號
        $("#div" + i).on("click", { num: i }, fnChange1);
    }
    fnChange();
    // 按下往左鈕執行fnPrev函式
    $("#btnPrev").on("click", fnPrev);
    // 按下往右鈕執行fnNext函式
    $("#btnNext").on("click", fnNext);
    timer = setInterval(fnNext, 3000);
    $("#div-show").hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(fnNext, 2000);
    }
    );  
});