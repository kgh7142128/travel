//JS景點介紹頁面
$(document).ready(function(){
    //頁面內容變換
    $("#aside-flex").click(function(e){
        var click_tag = e.target.getAttribute('id');
        switch (click_tag) {
           case "pic_1":
                $("#aside-flex").html(
                    `
                    `
                ),
                $("#aside-detil").html(
                    `
                    <div data-aos="zoom-in">
                    <img src="./images/pic_1.jpg" alt="" style="width: 90%; height:70%px;margin-left:73px">
                    </div>
                    <div data-aos="zoom-in">
                    <h3>景點介紹</h3>
                    <p>石門水庫曾經是遠東最大的水庫，目前亦是台灣北部的重要水庫之一，一年四季，湖光山色，風景秀麗。
                        石門水庫對外可連接十幾個旅遊景點，園區大小公園綠樹成林，有自行車步道，也有環湖遊艇，提供旅客多元的休閒樂趣。</p>
                    <hr>
                    </div>
                    <div data-aos="zoom-in">
                    <h3>景點資訊</h3>
                    <div class="div-1">
                        <div class="text-flex">
                            <div class="text-spac">
                                <p >電</p>
                            </div>
                            <p>話</p>
                        </div>
                        <p class="div-p">/</p>
                        <p>03-3821835</p>
                    </div>  
                    <div class="div-1">
                        <div class="text-flex">
                            <div class="text-spac">
                                <p >地</p>
                            </div>
                            <p>址</p>
                        </div>
                        <p class="div-p">/</p>
                        <a href="https://www.google.com/maps/place/24%C2%B047'26.3%22N+121%C2%B022'30.7%22E/
                        @24.79064,121.37519,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.79064!4d121.37519" class="map-a">
                        <p class="map-p">桃園市復興區義盛里下宇內1鄰4-6號</p>
                        </a>
                    </div>  
                    <div class="div-1">
                        <p>開放時間</p>
                        <p class="div-p">/</p>
                        <ul>
                            <li class="time-li">星期日:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期一:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期二:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期三:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期四:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期五:08:00-12:00、13:00-1700</li>
                            <li class="time-li">星期六:08:00-12:00、13:00-1700</li>
                        </ul>
                    </div>  
                    <div class="div-1">
                        <p>門票資訊</p>
                        <p class="div-p">/</p>
                        <p>全票50元、優待票30元、團體票40元(40人以上團體)</p>
                    </div>  
                    <div class="div-1">
                        <p>官方網站</p>
                        <p class="div-p">/</p>
                        <a href="https://skywalk.tycg.gov.tw/Page/Index.aspx" class="map-a"><p class="map-p">官方網站</p></a>
                    </div>
                    <hr>
                    </div>
                    <div data-aos="zoom-in">
                    <h3>旅遊叮嚀</h3>
                    <div class="div-1">
                        <ul>
                            <li class="not-list">團體(20人以上)線上申請時間為早上9時起至晚上24時止。</li>
                            <li >水域區每年6月及9月每逢星期六、日(含國定假日)開放，7月及8月配合暑假全月開放(週二休園日不開放)。</li>
                            <li >入園方式敬請旅客詳閱參觀須知<br>(https://skywalk.tycg.gov.tw/Page/declare.aspx)</li>
                        </ul>
                    </div>
                    <hr>
                    </div>
                    `
                );
               
                break;
            case "":
            $("#aside-flex").html(
                `
                
                `
            );
            
                break;
            case "":
            $("#aside-flex").html(
                `
                         
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
      
});