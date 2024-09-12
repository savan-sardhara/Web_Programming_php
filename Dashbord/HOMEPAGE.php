<!DOCTYPE html>
<html lang="en">
<head>
<!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: #343a40;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, #0091ad);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, #ff8c42, #ffbc3b);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Menu Data
    $menu1 = $_POST['menu1'];
    $menu2 = $_POST['menu2'];
    $menu3 = $_POST['menu3'];
    
    // Social Media Links
    $googleSite = $_POST['googlesite'];
    $linkedin = $_POST['linkedin'];
    $blog = $_POST['Blog'];
    $github = $_POST['github'];


    // Title and Footer
    $title = $_POST['title'];
    $footer = $_POST['footer'];

    // About and Skillset
    $about = $_POST['about'];
    $skillset = $_POST['skillset'];

    // Assignment and Project Detail
    // $work = $_POST['work']; // Dropdown value selected
    $task1 = $_POST['task1'] ?? '';  // Input name is dynamically generated based on dropdown selection
    $task2 =$_POST['task2'] ?? '';
    $task3 = $_POST['task3'] ?? '';
    $task4 = $_POST['task4'] ?? '';
    $task5 = $_POST['task5'] ?? '';
    $minorproject = $_POST['minorproj'] ?? '';
    $dbmodule=$_POST['dbmodul'] ?? '';

    //Project Detail
    $projectdetail=$_POST['projdetail'];

    // File Upload Handling
    $targetDir = "logo/";
    $titleLogoName="";


    // Handling Title Logo
    if (isset($_FILES['title_logo']) && $_FILES['title_logo']['error'] == 0) {
        $titleLogoName = basename($_FILES['title_logo']['name']);
        $targetFileTitleLogo = $targetDir . $titleLogoName;
        if (move_uploaded_file($_FILES['title_logo']['tmp_name'], $targetFileTitleLogo)) {
            // echo "Title logo uploaded successfully.<br>";
        } else {
            // echo "Failed to upload title logo.<br>";
        }
    }

    $footerLogoName="";
    // Handling Footer Logo
    if (isset($_FILES['footer_logo']) && $_FILES['footer_logo']['error'] == 0) {
        $footerLogoName = basename($_FILES['footer_logo']['name']);
        $targetFileFooterLogo = $targetDir . $footerLogoName;
        if (move_uploaded_file($_FILES['footer_logo']['tmp_name'], $targetFileFooterLogo)) {
            // echo "Footer logo uploaded successfully.<br>";
        } else {
            // echo "Failed to upload footer logo.<br>";
        }
    }
}

?>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#"><?php echo $menu1 ?></a></li>
                    <li class="list-group-item"><a href="#"><?php echo $menu2 ?></a></li>
                    <li class="list-group-item"><a href="#"><?php echo $menu3 ?></a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo $googleSite ?>" target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="<?php echo $linkedin ?>" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="<?php echo $blog ?>" target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="<?php echo $github ?>" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><?php echo $title ?></h1>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo $targetFileTitleLogo ?>" alt="Logo" width="100" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <p><?php echo $about ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <p><?php echo $skillset ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                            <button class="ocean-blue-button gradient-button"><a href="<?php echo $task1 ?>">Task 1</a></button>
                            <button class="sunset-orange-button gradient-button"><a href="<?php echo $task2 ?>">Task 2</a></button>
                            <button class="spring-green-button gradient-button"><a href="<?php echo $task3 ?>">Task 3</a></button>
                            <button class="royal-purple-button gradient-button"><a href="<?php echo $task4 ?>">Task 4</a></button>
                            <button class="ruby-red-button gradient-button"><a href="<?php echo $task5 ?>">Task 5</a></button>
                            <button class="goldenrod-yellow-button gradient-button"><a href="<?php echo $minorproject ?>">Minor Project Module</a></button><br>
                            <button class="spring-green-button gradient-button"><a href="<?php echo $dbmodule ?>">Database  Module</a></button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <p><?php echo $projectdetail ?></p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <img src="<?php echo $targetFileFooterLogo ?>" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>