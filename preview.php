<!DOCTYPE html>
<html>
<head>
    <title>Semester Registration - Review</title>
    <style>
        /* Readonly state styling */
        .readonly-mode {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            cursor: not-allowed;
        }
        /* Edit state styling */
        .edit-mode {
            background-color: white;
            border: 1px solid #aaa;
        }
        /* Table styling */
        .courses-table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        .courses-table th, .courses-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .courses-table th {
            background-color: #f2f2f2;
        }
        .courses-table input {
            width: 100%;
            box-sizing: border-box;
        }
        .info-table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 8px;
        }
        button {
            padding: 8px 16px;
            margin: 0 5px;
            cursor: pointer;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }
*{
margin: 0;
padding: 0;
box-sizing: border-box;
}
body{
background-color: white;
font-style: normal;
}
a
{
text-decoration: none;
color: black;
}
input{
border-radius: 4px;
}
.record-carrier{
background-color: #FFF5EE;
padding: 30px;
border-radius: 10px;
box-shadow: 5px 5px 9px 3px grey;
width: 50%;
height: 200%;
}
form{
text align: center;
}
.nav-bar{
display: flex;
padding: 10px 20px;
border-radius: 4px;
background-color: brown;
align-items: center;
justify-content: space-between;
position: relative;
}
.hamburger{
display: flex;
flex-direction: column;
justify-content: center;
cursor: pointer;
}
.bar{
width: 25px;
height: 3px;
background-color: white;
margin: 3px 0;
border-radius: 2px;
}
.title{
position: absolute;
left:100%;
transform: traslatex(-50%);
font-size: 20px;
font-weight: bold;
}
.rigt-section{
display: flex;
align-items: center;
gap: 10px;
}
.search-box input{
padding: 6px 12px;
border-radius: 4px;
border: none;
}
.help{
padding: 6px 12px;
background-color: orange;
color: 007bff;
border: none;
border-radius: 4px;
cursor: pointer;
font-weight: bold;
}
.help:hover{
background-color: blue;
}
#flist{
display: flex;
gap: 460px;
}
#jlist{
display: flex;
gap: 20px;
}

li{
list-style: none;

}
tr{
gap: 30px;
}
.myform{
height: 200%;
width: 60%
}

    </style>
</head>
<body>
    <div class="nav-bar">
        <ul id="flist" style="list-style: none; display: flex; align-items: center; padding: 0; margin: 0;">
            <li style="margin-right: 20px;">
                <div class="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </li>
            <li>
                <div>
                    <h1 style="margin: 0;"><i>Review Registration</i></h1>
                </div>
            </li>
        </ul>
        <ul id="jlist" style="list-style: none; display: flex; align-items: center; padding: 0; margin: 0;">
            <li style="margin-right: 20px;">
                <div class="search-section">
                    <div class="search-box">
                        <input type="text" placeholder="search">
                    </div>
                </div>
            </li>
            <li>
                <button class="help" onclick="window.location.href='help.html'">help?</button>
            </li>
        </ul>
    </div>

    <div style="padding: 20px;">
        <center><div class="record-carrier">
            <form id="review-form" form action="" method="POST">
                <table class="info-table">
                    <tr>
                        <td><label>Faculty:</label></td>
                        <td><input type="text" name="BCS" id="faculty" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td><input type="text" name="jacky"  id="name1" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Other name:</td>
                        <td><input type="text" name="joseph" id="name2" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Registration no:</td>
                        <td><input type="text" name="number" id="reg_no" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Current year:</td>
                        <td><input type="text" name="c_year" id="year" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Current semester:</td>
                        <td><input type="text" name="c_semis" id="semister" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="text" name="female" id="gender" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td><input type="text"  name="birthdate" id="DOB" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Nationality:</td>
                        <td><input type="text" name="tz" id="nationality" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Admission year:</td>
                        <td><input type="text"  name="yr"  id="adm_year" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Mode of entry:</td>
                        <td><input type="text" name="ME" id="Emode" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Date of Entry:</td>
                        <td><input type="text" name="DE" id="Dmode" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Study session:</td>
                        <td><input type="text"  name="study" id="ss" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Course offered:</td>
                        <td><input type="text"  name="CO" id="course" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Telephone no:</td>
                        <td><input type="text" name="numberr" id="tel_no" class="readonly-mode" readonly></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text"name="mal" id="mail" class="readonly-mode" readonly></td>
                    </tr>
                </table>

                <div id="courses-container" style="margin: 30px 0;">
                    <h2 style="text-align: center; color: blue;">Registered Courses</h2>
                    <table class="courses-table" id="courses-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Code</th>
                                <th>Course Title</th>
                                <th>Year</th>
                                <th>Semester</th>
                            </tr>
                        </thead>
                        <tbody id="courses-body">
                            <!-- Courses will be inserted here -->
                        </tbody>
                    </table>
                </div>

                <div style="text-align: center; margin-top: 20px;">
                    <button type="button" id="edit-toggle">Edit Information</button>
                    <button type="button" id="save-courses" style="display: none;">Save Courses</button>
                    <button type="submit" name="submit">Confirm Submission</button>
                </div>
            </form>
        </div></center>
    </div>

    <script>
        // Load student information from localStorage
        function loadStudentInfo() {
            document.getElementById('faculty').value = localStorage.getItem('faculty') || '';
            document.getElementById('name1').value = localStorage.getItem('name1') || '';
            document.getElementById('name2').value = localStorage.getItem('name2') || '';
            document.getElementById('reg_no').value = localStorage.getItem('reg no') || '';
            document.getElementById('year').value = localStorage.getItem('year') || '';
            document.getElementById('semister').value = localStorage.getItem('semister') || '';
            document.getElementById('gender').value = localStorage.getItem('gender') || '';
            document.getElementById('DOB').value = localStorage.getItem('DOB') || '';
            document.getElementById('nationality').value = localStorage.getItem('nationality') || '';
            document.getElementById('adm_year').value = localStorage.getItem('study year') || '';
            document.getElementById('Emode').value = localStorage.getItem('entry mode') || '';
            document.getElementById('Dmode').value = localStorage.getItem('entry date') || '';
            document.getElementById('ss').value = localStorage.getItem('session') || '';
            document.getElementById('course').value = localStorage.getItem('course') || '';
            document.getElementById('tel_no').value = localStorage.getItem('tel_no') || '';
            document.getElementById('mail').value = localStorage.getItem('mail') || '';
        }

        // Load course data from sessionStorage
        function loadCourseData() {
            let courseData = JSON.parse(sessionStorage.getItem("moduleData")) || [];
            const coursesBody = document.getElementById('courses-body');
            
            coursesBody.innerHTML = '';
            
            if (courseData.length > 0) {
                courseData.forEach((course, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${index + 1}</td>
                        <td><input type="text" name="code[]" value="${course.code || ''}" class="course-code" readonly></td>
                        <td><input type="text" name="title[]" value="${course.title || ''}" class="course-title" readonly></td>
                        <td><input type="text" name="year[]" value="${course.year || ''}" class="course-year" readonly></td>
                        <td><input type="text" name="semi[]" value="${course.sem || ''}" class="course-sem" readonly></td>
                    `;
                    coursesBody.appendChild(row);
                });
            } else {
                coursesBody.innerHTML = '<tr><td colspan="5" style="text-align: center;">No courses registered</td></tr>';
            }
        }

        // Toggle edit mode for both student info and courses
        document.getElementById('edit-toggle').addEventListener('click', function() {
            const isEditing = this.textContent === 'Edit Information';
            
            // Toggle student info fields
            const studentFields = document.querySelectorAll('#review-form .info-table input');
            studentFields.forEach(field => {
                field.readOnly = !isEditing;
                field.classList.toggle('readonly-mode');
                field.classList.toggle('edit-mode');
            });
            
            // Toggle course fields
            const courseFields = document.querySelectorAll('#courses-table input');
            courseFields.forEach(field => {
                field.readOnly = !isEditing;
                field.classList.toggle('readonly-mode');
                field.classList.toggle('edit-mode');
            });
            
            // Toggle buttons
            this.textContent = isEditing ? 'Cancel Editing' : 'Edit Information';
            document.getElementById('save-courses').style.display = isEditing ? 'inline-block' : 'none';
        });

        // Save course changes
        document.getElementById('save-courses').addEventListener('click', function() {
            const courseRows = document.querySelectorAll('#courses-table tr');
            const courseData = [];
            
            courseRows.forEach((row, index) => {
                if (index > 0) { // Skip header row
                    const cells = row.querySelectorAll('td');
                    if (cells.length >= 5) {
                        courseData.push({
                            code: cells[1].querySelector('input').value,
                            title: cells[2].querySelector('input').value,
                            year: cells[3].querySelector('input').value,
                            sem: cells[4].querySelector('input').value
                        });
                    }
                }
            });
            
            sessionStorage.setItem("moduleData", JSON.stringify(courseData));
            alert('Course changes saved!');
            loadCourseData(); // Refresh the display
        });

        // Save student information
        function saveStudentInfo() {
            localStorage.setItem('faculty', document.getElementById('faculty').value);
            localStorage.setItem('surname', document.getElementById('name1').value);
            localStorage.setItem('name2', document.getElementById('name2').value);
            localStorage.setItem('reg no', document.getElementById('reg_no').value);
            localStorage.setItem('year', document.getElementById('year').value);
            localStorage.setItem('semister', document.getElementById('semister').value);
            localStorage.setItem('gender', document.getElementById('gender').value);
            localStorage.setItem('DOB', document.getElementById('DOB').value);
            localStorage.setItem('nationality', document.getElementById('nationality').value);
            localStorage.setItem('study year', document.getElementById('adm_year').value);
            localStorage.setItem('entry mode', document.getElementById('Emode').value);
            localStorage.setItem('entry date', document.getElementById('Dmode').value);
            localStorage.setItem('session', document.getElementById('ss').value);
            localStorage.setItem('course', document.getElementById('course').value);
            localStorage.setItem('tel_no', document.getElementById('tel_no').value);
            localStorage.setItem('mail', document.getElementById('mail').value);
        }


        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            loadStudentInfo();
            loadCourseData();
        });
    </script>
<?php
 include_once("script_connect.php");
if(isset($_POST["submit"])){
$Faculity=$_POST["BCS"];
$Surname=$_POST["jacky"];
$Othername=$_POST["joseph"];
$id=$_POST["number"];
$Current_year=$_POST["c_year"];
$Current_semister=$_POST["c_semis"];
$Gender=$_POST["female"];
$Date_of_birth=$_POST["birthdate"];
$Nationality=$_POST["tz"];
$Adminssion_year=$_POST["yr"];
$Mode_of_entry=$_POST["ME"];
$Date_of_entry=$_POST["DE"];
$Study_session=$_POST["study"];
$Course_offered=$_POST["CO"];
$Telephone_no=$_POST["numberr"];
$Email=$_POST["mal"]; 
$query="SELECT count(*) FROM student_tb WHERE id=?";
$pin=$jacky->prepare($query);
$pin->bind_param('i',$id);
$pin->execute();
$pin->bind_result($count);
$pin->fetch();
$pin->close();

if ($count>0){
$update="UPDATE student_tb SET faculty=?, surname=?, others=?, c_year=?, c_sem=?, gender=?, dob=?, nationality=?, adm_year=?, e_mode=?, e_date=?, ss=?, c_offered=?, tel_no=?, email=? WHERE id=?";
$attach=$jacky->prepare($update);
$attach->bind_param('sssssssssssssssi',$Faculity,$Surname,$Othername,$Current_year,$Current_semister,$Gender,$Date_of_birth,$Nationality,$Adminssion_year,$Mode_of_entry,$Date_of_entry,$Study_session,$Course_offered,$Telephone_no,$Email,$id);
$attach->execute();
$attach->close();
}
else{
$vanilla="INSERT INTO student_tb(id,faculty,surname,others, c_year, c_sem, gender,dob,nationality,adm_year,e_mode,e_date,ss,c_offered,tel_no,email)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$pin=$jacky->prepare($vanilla);
$pin->bind_param('isssssssssssssss',$id,$Faculity,$Surname,$Othername,$Current_year,$Current_semister,$Gender,$Date_of_birth,$Nationality,$Adminssion_year,$Mode_of_entry,$Date_of_entry,$Study_session,$Course_offered,$Telephone_no,$Email);
$pin->execute();
$pin->close();
}

//INSERTING COURSE INFO!!
$code=$_POST["code"];
$title=$_POST["title"];
$year=$_POST["year"];
$semi=$_POST["semi"];
$status="";

$stmt = $jacky->prepare("INSERT INTO course (course_id, code, title, year, semister ,status) VALUES (?, ?, ?, ?, ?, ?)");
$status="new";

for ($i = 0; $i < count($code); $i++) {
$course_id = $id.$code[$i];
$query="SELECT count(*) FROM course WHERE course_id = ?";
$pin=$jacky->prepare($query);
$pin->bind_param('s', $course_id);
$pin->execute();
$pin->bind_result($count);
$pin->fetch();
$pin->close();

if($count>0){
$status = "carry";
$my_query = $jacky->prepare("UPDATE course SET status = ? WHERE course_id = ?");
$my_query->bind_param('ss', $status, $course_id);
$my_query->execute();
}
else{
$stmt->bind_param("ssssss",$course_id, $code[$i], $title[$i], $year[$i], $semi[$i], $status);
$stmt->execute();
$stmt->close();
$enroll="INSERT INTO enroll_tb (sid, code) VALUES (?, ?)";
$capture=$jacky->prepare($enroll);
$capture->bind_param('is', $id, $course_id);
$capture->execute();
$capture->close();
}
}

echo"<script> alert('submitted successfully')</script>";
}
?>
</body>
</html>
