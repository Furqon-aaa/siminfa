<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Archive</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1A0D2E;
            color: white;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1A0D2E;
            padding: 10px 20px;
            border-bottom: 1px solid #3D1A61;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .get-in-touch {
            background-color: #3D1A61;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }
        .container {
            display: flex;
            background-color:rgb(17, 0, 90);
        }
        .sidebar {
            background-color: #003366;
            width: 200px;
            height: calc(100vh - 50px);
            padding: 10px;
        }
        .sidebar button {
            background-color:rgb(14, 0, 77);
            display: block;
            width: 100%;
            color: white;
            font-size: 16px;
            text-align: left;
            margin: 5px 0;
            padding: 10px;
            cursor: pointer;
        }
        .sidebar button:hover {
            background-color: #1A0D2E;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #1A0D2E;
        }
        .semester-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .grid .item {
            background-color: white;
            color: black;
            height: 150px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
        .grid .item:hover {
            background-color: #D3D3D3;
        }
    </style>
</head>
<body>
    <header>
        <h1>CLASS ARCHIVE</h1>
        <button class="get-in-touch">Get in Touch</button>
    </header>
    <div class="container">
        <aside class="sidebar">
            <button onclick="location.href='#semester-1'">Semester 1 ></button>
            <button onclick="location.href='#semester-2'">Semester 2 ></button>
            <button onclick="location.href='#semester-3'">Semester 3 ></button>
            <button onclick="location.href='#semester-4'">Semester 4 ></button>
            <button onclick="location.href='#semester-5'">Semester 5 ></button>
            <button onclick="location.href='#semester-6'">Semester 6 ></button>
            <button onclick="location.href='#semester-7'">Semester 7 ></button>
            <button onclick="location.href='#semester-8'">Semester 8 ></button>
        </aside>
        <main class="main-content">
            <div id="semester-1">
                <div class="semester-title">Semester 1</div>
                <div class="grid">
                    <div class="item"><img src="images/semester1-subject1.jpg" alt="Subject 1"></div>
                    <div class="item"><img src="images/semester1-subject2.jpg" alt="Subject 2"></div>
                    <div class="item"><img src="images/semester1-subject3.jpg" alt="Subject 3"></div>
                    <div class="item"><img src="images/semester1-subject4.jpg" alt="Subject 4"></div>
                    <div class="item"><img src="images/semester1-subject5.jpg" alt="Subject 5"></div>
                    <div class="item"><img src="images/semester1-subject6.jpg" alt="Subject 6"></div>
                    <div class="item"><img src="images/semester1-subject7.jpg" alt="Subject 7"></div>
                    <div class="item"><img src="images/semester1-subject8.jpg" alt="Subject 8"></div>
                </div>
            </div>
            <!-- Repeat the above block for semesters 3 to 8 -->
        </main>
    </div>
</body>
</html>
