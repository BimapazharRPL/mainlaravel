<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran</title>
</head>
<body>
    <h2>Buat  Account Baru</h2>
    <p><strong>Sign Up Form</strong></p>
    <form action="./terakhir.html">
        <label for="inputFN">First name</label><br><br>
        <input type="text" id="inputFN"><br><br>
        <label for="inputLN">Last name</label><br><br>
        <input type="text" id="inputLN">
            <p>Gender</p>
            
            <input type="radio" id="male" name="JK">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="JK">
            <label for="female">Female</label>

        <p>Nationality</p>
        <select>
            <option value="Indonesia">Indonesia</option>
            <option value="America">America</option>
            <option value="Inggris">Inggris</option>
        </select>
        <p>Language Spoken</p>
            <input type="checkbox" id="B indo">
            <label for="B indo">Bahasa Indonesia</label><br>
            <input type="checkbox" id="Inggris">
            <label for="Inggris">Inggris</label><br>
            <input type="checkbox" id="other">
            <label for="other">other</label>
            <p>Bio</p>
            <textarea cols="30" rows="10"></textarea><br>
            <input type="submit" value="sign up">
    </form>
</body>
</html>