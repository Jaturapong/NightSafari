<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thank you</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        td {
            width: 100%;
            height: 100%;
            table-layout: fixed;
        }
        
        table {
            table-layout: fixed;
            width: 50%;
            height: 50%;
            border: 1px solid;
            padding-top: 30%;
        }
        
        .bg {
            background-image: url('Images/BgThank1.jpg');
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-attachment: fixed;
            background-size: 100% 100%;
            overflow: hidden;
        }
        
        .typewriter h1 {
            font-family: Copperplate, "Copperplate Gothic Light", fantasy;
            font-size: 70px;
            color: Red;
            /* Web-safe typewriter-like font */
            overflow: hidden;
            /* Ensures the content is not revealed until the animation */
            border-right: .10em solid orange;
            /* The typwriter cursor */
            white-space: nowrap;
            /* Keeps the content on a single line */
            margin: 0 0;
            /* Gives that scrolling effect as the typing happens */
            letter-spacing: .15em;
            /* Adjust as needed */
            animation: typing 2.5s steps(30, end), blinking-cursor .5s;
        }
        /* The typing effect */
        
        @keyframes typing {
            from {
                width: 0
            }
            to {
                width: 40%
            }
        }
        /* The typewriter cursor effect */
        
        @keyframes blinking-cursor {
            from,
            to {
                border-color: transparent
            }
            30% {
                border-color: orange;
            }
        }
    </style>

</head>

<body class="bg">

    <div style="padding-top: 10%">
        <center>
            <div class="typewriter">
                <h1>Thank You.</h1>
            </div>
        </center>
        <div style="padding-left: 40%"><img id="imgShow" src="Images/White Tiger5.png" class="responsive" width="700 px" height="400 px"></div>
    </div>
</body>
<script type="text/javascript">
    var urlParams = new URLSearchParams(window.location.search);
    var select = urlParams.get('select'); // "edit"
    console.log(select)
    if (select == '1') {
        document.getElementById("imgShow").src = "Images/giraffe.png";
        console.log('A')
    } else if (select == '2') {
        document.getElementById("imgShow").src = "Images/White Tiger5.png";
        console.log('B')
    } else if (select == '3') {
        document.getElementById("imgShow").src = "Images/elephant.png";
    } else if (select == '4') {
        document.getElementById("imgShow").src = "Images/ค่าง5สี.png";
    }
</script>

</html>