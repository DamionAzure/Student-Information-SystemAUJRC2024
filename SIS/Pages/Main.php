<!DOCTYPE html>
<html>
<head>
    <title>My Simple Website</title>
    
    <link rel="stylesheet" href="../CSS/Style1.css">
</head>
<body>
    <div>
        <nav>
            <button>Log Out</button>
        </nav>
    </div>
    <header>
        <h1>Student Information System</h1>
        <nav>
            <input type="radio" name="grade" value="11" id="grade11">
            <label for="grade11">Grade 11</label>
            <input type="radio" name="grade" value="12" id="grade12">
            <label for="grade12">Grade 12</label>
        </nav>
        <div id="button-container">
            <div id="grade11-options" style="display: none;">
                <ul>
                    <li><a href="#">Grade 11 Personal Information</a></li>
                    <li><a href="#">Grade 11 Grades</a></li>
                    <li><a href="#">Grade 11 Attendance</a></li>
                    <li><a href="#">Grade 11 Student Documents</a></li>
                </ul>
            </div>
            <div id="grade12-options" style="display: none;">
                <ul>
                    <li><a href="#">Grade 12 Personal Information</a></li>
                    <li><a href="#">Grade 12 Grades</a></li>
                    <li><a href="#">Grade 12 Attendance</a></li>
                    <li><a href="#">Grade 12 Student Documents</a></li>
                </ul>
            </div>
        </div>
    </header>
</body>
<script src="../FUNCTION/Function.js"></script>
</html>