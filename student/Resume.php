<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>   
        <img id="img2" src="../images/editicon.png" width="650px" style="position: absolute; position: fixed; z-index: 1; 
        margin-left: 55%; margin-top: 13vh;">
    </div>
    <img src="../images/edit.png" id="img1" style="position: fixed;">
        <?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
        <h1 class="form-row justify-content-center" style="margin-left: 100px;">Resume Form</h1> <br>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
             <div class="border border-dark p-3 mb-3">    
                <h2>Contact</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone"  required>
                </div>
            </div>
             <div class="border border-dark p-3 mb-3">    
                <h2>Skills (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select stars based upon your skill level</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Advanced Beginner</option>
                        <option value="3">3 - Competent</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>About Me</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <input type="submit" class="form-control my-2">
        </form>
                  
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>

<script type="text/javascript">
    var skill_count=1;
var hobby_count=1;
var education_count=1;
var experience_count=1;
function addSkill(){
    let addSkill = document.getElementById('addSkill');
    let skillHide = document.getElementById('skill_hide');
    if(skill_count<5)
    {
        ++skill_count;
        var field = 
        `<div class="mb-3">
            <label class="form-label">Skillset Name</label>
            <input type="text" class="form-control" name="skill${skill_count}">
            <select class="form-select mt-2" name="skill_level${skill_count}">
                <option value="">Select stars based upon your skill level</option>
                <option value="1">1 - Novice</option>
                <option value="2">2 - Advanced Beginner</option>
                <option value="3">3 - Competent</option>
                <option value="4">4 - Proficient</option>
                <option value="5">5 - Expert</option>
            </select>
        </div>`;
        console.log(field);
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addSkill.insertAdjacentElement("beforeend", htmlObject);
    }
    if(skill_count==5)
    {
        skillHide.style = "display:none";
    }
}

function addHobby(){
    let addHobby = document.getElementById('addHobby');
    let hobbyHide = document.getElementById('hobby_hide');
    if(hobby_count<4)
    {
        ++hobby_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hobby</label>
            <input type="text" name="hobby${hobby_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addHobby.insertAdjacentElement("beforeend", htmlObject);
    }
    if(hobby_count==4)
    {
        hobbyHide.style = "display:none";
    }
}
function addEducation(){
    let addEducation = document.getElementById('addEducation');
    let educationHide = document.getElementById('education_hide');
    if(education_count<3)
    {
        ++education_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">School/College/University</label>
            <input type="text" name="institute${education_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Degree Name</label>
            <input type="text" name="degree${education_count}" class="form-control">
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <div>
                <label for="exampleInputEmail1" class="form-label">From</label>
                <input type="text" name="from${education_count}" class="form-control">
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label">To</label>
                <input type="text" name="to${education_count}" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
            <input type="text" name="grade${education_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addEducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(education_count==3)
    {
        educationHide.style = "display:none";
    }
}
function addExperience(){
    let addExperience = document.getElementById('addExperience');
    let experienceHide = document.getElementById('experience_hide');
    if(experience_count<3)
    {
        ++experience_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title${experience_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description${experience_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addExperience.insertAdjacentElement("beforeend", htmlObject);
    }
    if(experience_count==3)
    {
        experienceHide.style = "display:none";
    }
}
</script>