<!DOCTYPE html>
<html lang="en">

<head>
    <!-- เพิ่มฟอนต์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mitr:wght@200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&family=Pattaya&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        h1 {
            color: darkslategray;
            font-family: "Trirong", serif;
            font-weight: 450;
            font-style: normal;
            font-size: 40px;
        }

        body {
            font-family: "Trirong", serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
    <!-- สิ้นสุด -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title>
</head>

<body>
    <center>
        <h1>ทดสอบการรับค่าผ่าน form</h1>
    </center>
    <?php
    echo "ชื่อของคุณ คือ " . $_GET["name"]; 
    echo "  นามสกุล คือ " . $_GET["surname"];


    ?>


</body>

</html>