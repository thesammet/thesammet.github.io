<html>

<head>
    <title>Input Sample</title>
    <meta name="description" content="CENG311 Activity">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Activity4.css">
<body>
    <h1>Registration Form</h1>
    <form action="Activity4-preview.php" method="post">
        <div>
            <label>Name: </label>
            <input type="text" name="name"><br>
        </div>
        <div>
            <label>Username: </label>
            <input type="text" name="username"><br>
        </div>
        <div>
            <label>Password: </label>
            <input type="text" name="password"><br>
        </div>
        <div>
            <label>Address: </label>
            <input type="text" name="address"><br>
        </div>
        <div>
        <label>Country: </label>
            <select name="country" class="form-control" id="country">
                <option value="Select a country ... " label="Select a country ... " selected="selected">
                    Select a country ...
                </option>
                <option value="Usa" label="English">Usa</option>
                <option value="France" label="French">France</option>
                <option value="Germany" label="Benin">Germany</option>
            </select><br>
        </div>
        <div>
            <label>ZIP Code: </label>
            <input type="text" name="zip_code"><br>
        </div>
        <div>
            <label> E-mail: </label>
            <input type="text" name="email"><br>
        </div>
        <div>
            <label>Password: </label>
            <input type="text" name="password"><br>
        </div>
        <div>
            <label>Password: </label>
            <input type="text" name="password"><br>
        </div>
        <div>
            <label>Sex: </label>
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male<br>
        </div>
        <div>
            <label>Language: </label>
            <input type="checkbox" name="language-1" value="English">English
            <input type="checkbox" name="language-2" value="French">French
            <input type="checkbox" name="language-3" value="Germany">Germany<br>
        </div>
        <div>
            <label>About: </label>
            <textarea name="about" rows="5" colss="40"></textarea><br>
        </div>
        <div class="submit-button">
            <input type="submit">
        </div>
        <div>
    </form>

</body>

</html>