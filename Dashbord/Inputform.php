<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Section Animation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .section {
            position: absolute;
            width: 350px;
            height: 400px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            /* display: flex;
            flex-direction: column; */
            /* align-items: ; */
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            z-index: 1;
            opacity: 0.8;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .section label{
            color: rgb(53, 39, 122);
            size: 40px;
            text-decoration: double;
            font-weight: bold;

            
        }
        
        .section.active {
            z-index: 10;
            transform: translate(-50%, -50%) translate(-20px, -20px);
            opacity: 1;
            animation: swipe 0.9s;
        }
        
                /* Target all input fields inside the .section class */
                .section input {
            width: 60%;              /* Full width input */
            padding: 5px;             /* Padding for the input */
            /* margin-top: 10px;          Space between input and other elements */
            border: 2px solid #182d19; /* Green border */
            border-radius: 5px;        /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
            font-size: 16px;           /* Larger font size */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .section5 input {
            /* width: 60%;              Full width input */
            padding: 2px;             /* Padding for the input */
             margin: 2px;       /*   Space between input and other elements */
            border: 2px solid #182d19; /* Green border */
            border-radius: 5px;        /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
            font-size: 16px;           /* Larger font size */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

               /* Styling the select element */
               .section select {
            width: 80px;
            padding: 2px;
            /* margin-top: 10px; */
            border: 2px solid #172018;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            appearance: none; /* Removes default dropdown arrow */
            /* background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEiIGhlaWdodD0iNTEiIHZpZXdCb3g9IjAgMCA1MSA1MSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIuMzkxOTcsMC4xMjY3ODNDMi43MTkzOSwtMC4yMDU5NTkgMy4zOTk3NywtMC4yMDU5NTkgMy43MjgwOSwwLjEyNjc4M0wyNS41LDE4LjE5OTNMNDcuMjczMiwwLjEyNjc4M0M0Ny42MDU0LC0wLjIwNTk1OSA0OC4yODM4LC0wLjIwNTk1OSA0OC42MTE5LDAuMTI2NzgzQzQ4LjkzOTMsMC40NTM1MjggNDguOTM5MywxLjEzODk3IDQ4LjYxMTksMS40NjUyM0wyNS41LDM5Ljk1NDJMMC4zODgwOTksMS40NjUyM0MwLjA2MDc2ODcsMS4xMzg5NyAwLjA2MDc2ODcsMC40NTM1MjggMC4zODgwOTksMC4xMjY3ODNDMC43MTkzOTEsLTAuMjA1OTU5IDEuMzkyMDcsLTAuMjA1OTU5IDEuNzE5MTEsMC4xMjY3ODNMMjUuNSwxOC4xOTkzTDIuMzkxOTcsMC4xMjY3ODNaIiBmaWxsPSIjMzZGRkYzIi8+Cjwvc3ZnPgo=') no-repeat right 10px center; */
            background-size: 12px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }


        /* Add some hover effect */
        .section input:hover {
            border-color: #09140a;     /* Darker green on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Increase shadow on hover */
        }

        /* Style for focused input fields */
        .section input:focus {
            border-color: #3e438e;     /* Even darker green when focused */
            box-shadow: 0 0 10px rgba(46, 75, 204, 0.8); /* Glow effect */
            outline: none;             /* Remove the default outline */
        }
        
        .assignment{
            display: flex;
            justify-content: space-between;
        }

        .cont {
            margin: 10px;
            /* border: 2px solid red; */
            display: flex;
            justify-content: space-between;
        }
        
        @keyframes swipe {
            0% {
                transform: translate(-50%, -50%) translate(-20px, -50px);
            }
            25% {
                transform: translate(-50%, -50%) translate(100px, -30px);
            }
            75% {
                transform: translate(-50%, -50%) translate(-20px, -30px);
            }
            100% {
                transform: translate(-50%, -50%) translate(-20px, -20px);
            }
        }
        
        .manu {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .manu ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 10px;
        }
        
        .manu ul li {
            margin: 10px 0;
        }
        
        .manu ul li a {
            text-decoration: none;
            color: #000;
            cursor: pointer;
            padding: 10px;
            background-color: #ddd;
            border-radius: 5px;
        }
        
        .manu ul li a:hover , a:focus {
            background-color: #bbb;
        }
    </style>
</head>

<body>

    <form action="HOMEPAGE.php" method="post"  enctype="multipart/form-data">

        <div class="section section1 active" id="section1">
            <label for="sidebar">Enter Menu's</label>
            <div class="cont">
                Menue 1 <input type="text" name="menu1">

            </div>
            <div class="cont">
                Menue 2 <input type="text" name="menu2">

            </div>
            <div class="cont">
                Menue 3 <input type="text" name="menu3">

            </div>


        </div>

        <div class="section section2" id="section2">
            <label for="sidebar">Enter The Social Media</label>
            <div class="cont">
                Google site link : <input type="text" name="googlesite">
            </div>
            <div class="cont">
                LinkkedIn : <input type="text" name="linkedin">
            </div>
            <div class="cont">
                Blog : <input type="text" name="Blog">
            </div>

            <div class="cont">
                Github : <input type="text" name="github">
            </div>
        </div>

        <div class="section section3" id="section3">
          <label for="">  Enter The Title and Footer</label>
            <div class="cont">
                Enter Title <input type="text" name="title">
            </div>
            <div class="cont" style="display: flex;flex-direction: column; height: 50px; ">
                Enter Title Logo <input type="file" name="title_logo">
            </div>
            <div class="cont">
                Enter Footer <input type="text" name="footer">
            </div>
            <div class="cont" style="display: flex;flex-direction: column; height: 50px; ">
                <div class="footer">
                    Enter Footer Logo 
                </div>
                <div class="footer_logo">
                    <input type="file" name="footer_logo" >
                </div>
            </div>


        </div>
        <div class="section section4" id="section4">
          <label for=""> Enter About You and Skillset </label>
            <div class="count">
                <div class="AbSk" style="margin-top:20px ;">
                    Enter About you 
                </div>
                <div class="AbSk" >
                    <textarea name="about" id=""  rows="5" cols="30"></textarea>
                </div>
            </div>
            <div class="count" style="margin-top:20px ;">
                <div class="AbSk">
                    Enter Skillset 
                </div>
                <div class="AbSk">
                    <textarea name="skillset" id="" rows="5" cols="30"> </textarea>
                </div>
            </div>
        </div>
        <div class="section section5" id="section5">
            <label for="">Enter Assignment And Project Detail</label>
            <div class="assiment_main" id="assiment_main" style="height:205px; ">
                <div class="assignment" >
                    <select name="work" onchange="updateName(this)">
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                        <option value="task3">Task 3</option>
                        <option value="task4">Task 4</option>
                        <option value="task5">Task 5</option>
                        <option value="minorproj">Minor Project</option>
                        <option value="dbmodul">Database Module</option>
                    </select>
                    <input type="text" name="task1">
                </div>
            </div>
            <div class="cent" style="display : flex; justify-content: center; margin:5px;">
                <button name="add" id="ad" onclick="addControl(event)" style="padding:5px 10px; border:2px solid black; border-radius:5px">Add</button>
            </div>
            <div class="sub" style="display: flex; flex-direction:column; justify-content: end; ">
                 <div class="AbSk">
                    Enter Project Detail 
                </div>
                <div class="AbSk" >
                    <textarea name="projdetail" placeholder="Project Detail" id="" rows="3" cols="30"> </textarea>
                </div>
                <div class="bt" style="display:flex; justify-content:center; margin-top:2px;">
                    <input type="submit" name="insert" value="Insert" style="width:80%">
                </div>
            </div>
        </div>

    </form>

    <div class="manu">
        <ul>
            <li><a href="#" onclick="showSection('section1')">Menu</a></li>
            <li><a href="#" onclick="showSection('section2')">Social Media</a></li>
            <li><a href="#" onclick="showSection('section3')">Title, Footer</a></li>
            <li><a href="#" onclick="showSection('section4')">About, Skillset</a></li>
            <li><a href="#" onclick="showSection('section5')">Assignment, Project</a></li>
        </ul>
    </div>

    <script>
        function showSection(sectionId) {
            // Remove active class from all sections
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.classList.remove('active');
            });

            // Add active class to the clicked section
            var activeSection = document.getElementById(sectionId);
            activeSection.classList.add('active');
        }

        function updateName(selectElement) {
            // Get the input element associated with this dropdown
            var inputElement = selectElement.nextElementSibling;

            // Set the name of the input to the selected value
            inputElement.name = selectElement.value;
        }

        function addControl(event) {
             // Prevent form submission
             event.preventDefault();

            // Get the main container where new assignment divs will be added
            var assignmentMain = document.getElementById('assiment_main');

            // Create a new div for the assignment
            var newAssignment = document.createElement('div');
            newAssignment.className = 'assignment';

            // Create a new select element
            var newSelect = document.createElement('select');
            newSelect.name = 'work';
            newSelect.onchange = function() {
                updateName(newSelect);
            };

            // Add the options to the select element
            var options = [
                { value: 'task1', text: 'Task 1' },
                { value: 'task2', text: 'Task 2' },
                { value: 'task3', text: 'Task 3' },
                { value: 'task4', text: 'Task 4' },
                { value: 'task5', text: 'Task 5' },
                { value: 'minorproj', text: 'Minor Project' },
                { value: 'dbmodul', text: 'Database Module' }
            ];

            options.forEach(function(optionData) {
                var option = document.createElement('option');
                option.value = optionData.value;
                option.text = optionData.text;
                newSelect.appendChild(option);
            });

            // Create a new input element
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'task1';  // Default name will be the first option's value

            // Append the select and input to the new assignment div
            newAssignment.appendChild(newSelect);
            newAssignment.appendChild(newInput);

            // Append the new assignment div to the main container
            assignmentMain.appendChild(newAssignment);
        }
    </script>

</body>

</html>