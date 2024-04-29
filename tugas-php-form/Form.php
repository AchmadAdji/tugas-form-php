<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Online Form-Adji</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="kotak_login">
    <form action="Welcome.php" method="get">
    <h1>Buat Account Baru</h1>
    <div id="title">
    <h2>Sign Up Form</h2>
    <div class="underline-title">
    </div><br>

    <label for="fname">First name :</label><br>
    <input type="text" id="fname" name="fname" placeholder="input your first name" maxlength="15" pattern="[A-Za-z ]+" class="form_input" required><br>
    <label for="lname">Last name :</label><br>
    <input type="text" id="lname" name="lname" placeholder="input your last name" maxLength="20" pattern="[A-Za-z ]+" class="form_input" required><br><br>

    <label for="">Gender</label><br><br>
    <input type="radio" name="gender" id="male" class="radio" value="male" required>
    <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female" value="female" class="radio">
    <label for="female">Female</label><br><br>
        
    <label for="national">Nationality</label><br>
    <select name="national" id="national">
        <option value="indonesia">Indonesia</option>
        <option value="english">English</option>
        <option value="japan">Japanese</option>
    </select><p>

    <form method="get">
    <label for="checkbox">Language Spoken</label><br><p></p>
    <input type="checkbox" id="indonesia" name="bahasa[]" value="indonesia" required>
    <label for="indonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="bahasa[]" value="english">
    <label for="english">English</label><br>
    <input type="checkbox" id="japanese" name="bahasa[]" value="japanese">
    <label for="japanese">Japanese</label><br><br>
</form>

        <label for="bio">Bio</label><br><br>
        <textarea name="Bio" rows="10" cols="30" id="bio" maxlength="100" placeholder="Input your Bio in Here"></textarea>
        <br><br>
        <input type="submit" class="tombol_login" value="Sign Up">

    </form>
</div>
</body>
</html>