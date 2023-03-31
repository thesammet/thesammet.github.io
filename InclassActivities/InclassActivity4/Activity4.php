<html>

<head>
    <title>Input Sample</title>
    <meta name="description" content="CENG311 Activity">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Activity4.css">

<body>

    <form action="Activity4-preview.php" method="post">
        <div>
            Name: <input type="text" name="name"><br>
        </div>
        <div>
            Username: <input type="text" name="username"><br>
        </div>
        <div>
            Password: <input type="text" name="password"><br>
        </div>
        <div>
            Address: <input type="text" name="address"><br>
        </div>
        <div>
            Country:
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
            ZIP Code: <input type="text" name="zip_code"><br>
        </div>
        <div>
            E-mail: <input type="text" name="email"><br>
        </div>
        <div>
            Sex:
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male<br>
        </div>
        <div>
            Language:
            <input type="radio" name="language" value="English">English
            <input type="radio" name="language" value="French">French
            <input type="radio" name="language" value="Germany">Germany<br>
        </div>
        <div>
            About: <textarea name="about" rows="5" colss="40"></textarea><br>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

</body>

</html>