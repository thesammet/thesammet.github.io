<html>

<body>
    <?php echo $_POST["name"] == null ? "Name: Not provided" : $_POST["name"]; ?><br>
    <?php echo $_POST["username"] == null ? "Username: Not provided" : $_POST["username"]; ?><br>
    <?php echo $_POST["password"] == null ? "Password: Not provided" : $_POST["password"]; ?><br>
    <?php echo $_POST["address"] == null ? "Address: Not provided" : $_POST["address"]; ?><br>
    <?php echo $_POST["country"] == "Select a country ... " ? "Country: Not provided" : $_POST["country"]; ?><br>
    <?php echo $_POST["zip_code"] == null ? "ZIP Code: Not provided" : $_POST["zip_code"]; ?><br>
    <?php echo $_POST["email"] == null ? "Email: Not provided" : $_POST["email"]; ?><br>
    <?php echo $_POST["gender"] == null ? "Gender: Not provided" : $_POST["gender"]; ?><br>
    <?php echo $_POST["language"] == null ? "Language: Not provided" : $_POST["language"]; ?><br>
    <?php echo $_POST["about"] == null ? "About: Not provided" : $_POST["about"]; ?><br>
</body>

</html>