<html>

<head>
    <title>Input Sample</title>
    <meta name="description" content="CENG311 Activity">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Activity4.css">

<body>

    <form action="Activity4-preview.php" method="post">
        Name: <input type="text" name="name"><br>
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        Address: <input type="text" name="address"><br>
        Country:
        <select name="country" class="form-control" id="country">
            <option label="Select a country ... " selected="selected">Select a country ... </option>
            <option value="Usa" label="English">Usa</option>
            <option value="France" label="French">France</option>
            <option value="Germany" label="Benin">Germany</option>
        </select><br>
        ZIP Code: <input type="text" name="zip_code"><br>
        E-mail: <input type="text" name="email"><br>
        Sex:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female")
            echo "checked"; ?>
            value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male")
            echo "checked"; ?>
            value="male">Male<br>
        Language:
        <input type="radio" name="language" value="English">English
        <input type="radio" name="language" value="French">French
        <input type="radio" name="language" value="Germany">Germany<br>
        About: <textarea name="about" rows="5" colss="40"></textarea><br>
        <input type="submit">
    </form>

</body>

</html>