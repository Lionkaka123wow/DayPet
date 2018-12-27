<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DayPet</title>
    <link rel="stylesheet" type="text/css" href="style/index_style.css">
</head>

<body>
    <div id="bone_div">
        <table id="bone_table">
            <tr>
                <td id="table_top">
                    <table id="bone_menu">
                        <tr>
                            <td id="menu1" class="menu">回到首頁</td>
                            <td id="menu2" class="menu">公告事項</td>
                            <td id="menu3" class="menu">
                                <div id="start_buttom"></div>
                            </td>
                            <td id="menu4" class="menu">遊戲介紹</td>
                            <td id="menu5" class="menu">尚未建構</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td id="table_body">
                    <?php
                        include '\DayPet\page\index_php\home.php';
                    ?>
                </td>
            </tr>
            <tr>
                <td id="table_bottom">
                    <table id="other">
                        <tr>
                            <td id="other1" class="other_">
                                &nbsp版本：0.0.0.0
                                <br> 尚未開發完成
                            </td>
                            <td id="other2" class="other_">
                                建議解析度：1920x1080&nbsp
                                <br>
                                建議使用瀏覽器 Chrome
                                <img src="/image/index/chrome-icon.png" id="chrome">
                                <br>
                                <font id="copyright">
                                    Copyright © 2018 DayPet All rights reserved.&nbsp&nbsp
                                </font>
                            </td>
                            <td id="other3" class="other_">
                                回報問題
                            </td>
                            <td id="other4" class="other_">
                                Donate
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>