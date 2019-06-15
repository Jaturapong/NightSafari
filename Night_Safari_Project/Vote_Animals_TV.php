<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Vote Animals</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        td {
            width: 25%;
            height: 70%;
            table-layout: fixed;
        }
        
        table {
            table-layout: fixed;
            width: 100%;
            height: 100%;
        }
    </style>
    <script language="javascript">
        function showHeart(number) {
            var n = number.toString()
            document.getElementById("showHeart" + n).innerHTML = "<div id='heart'></div>";

            setTimeout(function() {
                document.getElementById("showHeart" + n).innerHTML = "<div></div>";
                window.location.href = "Vote.php?select=" + n + "&from=2";
            }, 1100);

        }
    </script>
</head>

<body>
    <table cellspacing="0" cellpadding="0">
        <tr>
            <td class='column1'>

                <div style="height: 70%;padding-top: 20% " onclick="showHeart(1) "><img src="Images/giraffe.png " class="responsive " width="300 px " height="250 px ">

                    <div id="showHeart1"></div>
                </div>

                <div style="height: 30% " onclick="showHeart(1) ">
                    <center>
                        <h1>Giraffe</h1>
                        <h1>ยีราฟ</h1>
                        <h1>长颈鹿</h1>
                    </center>
                </div>
            </td>
            <td class="column2">
                <div style="height: 70%;padding-top: 20% " onclick="showHeart(2) "><img src="Images/White Tiger5.png " class="responsive " width="300 px " height="250 px ">
                    <div id="showHeart2"></div>
                </div>
                <div style="height: 30% " onclick="showHeart(2) ">
                    <center>
                        <h1>White Tiger</h1>
                        <h1>เสือขาว</h1>
                        <h1>白虎</h1>
                    </center>
                </div>
            </td>
            <td class="column3">
                <div style="height: 70%;padding-top: 20% " onclick="showHeart(3) "><img src="Images/elephant.png " class="responsive " width="300 px " height="250 px ">
                    <div id="showHeart3"></div>
                </div>
                <div style="height: 30% " onclick="showHeart(3) ">
                    <center>
                        <h1>Asian Elephant</h1>
                        <h1>ช้างเอเชีย</h1>
                        <h1>亚洲象</h1>
                    </center>
                </div>
            </td>
            <td class="column4">
                <div style="height: 70%;padding-top: 20% " onclick="showHeart(4) "><img src="Images/ค่าง5สี.png " class="responsive " width="300 px " height="250 px ">
                    <div id="showHeart4"></div>
                </div>
                <div style="height: 30% " onclick="showHeart(4) ">
                    <center>
                        <h1>Red-shanked douc</h1>
                        <h1>ค่างห้าสี</h1>
                        <h1>白臀叶猴</h1>
                    </center>
                </div>
            </td>
        </tr>

    </table>

</body>

</html>