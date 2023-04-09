<?php
    session_start(); // Start the session

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $fromCurrency = $_POST['from_currency'];
        $toCurrency = $_POST['to_currency'];
        $amount = $_POST['amount'];

        // Store form data in session variables
        $_SESSION['from_currency'] = $fromCurrency;
        $_SESSION['to_currency'] = $toCurrency;
        $_SESSION['amount'] = $amount;
    }

    // Hardcoded exchange rates
    $exchangeRates = array(
        'USD' => array(
            'EUR' => 0.85,
            'GBP' => 0.72
        ),
        'EUR' => array(
            'USD' => 1.18,
            'GBP' => 0.85
        ),
        'GBP' => array(
            'USD' => 1.38,
            'EUR' => 1.18
        )
    );

    // Retrieve form data from session variables
    $fromCurrency = isset($_SESSION['from_currency']) ? $_SESSION['from_currency'] : 'USD';
    $toCurrency = isset($_SESSION['to_currency']) ? $_SESSION['to_currency'] : 'USD';
    $amount = isset($_SESSION['amount']) ? $_SESSION['amount'] : '';

    // Check if conversion is possible
    if (isset($exchangeRates[$fromCurrency]) && isset($exchangeRates[$fromCurrency][$toCurrency])) {
        // Calculate converted amount
        $convertedAmount = $amount * $exchangeRates[$fromCurrency][$toCurrency];
    } else {
        // Invalid conversion
        $convertedAmount = '0';
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Currency Calculator</title>
    <meta name="description" content="CENG311 Activity">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Activity5.css">
</head>

<body>
    <?php
        // Define default values
        $fromCurrency = 'USD';
        $toCurrency = 'USD';
        $amount = 0;

        // Check if form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve form data
            $fromCurrency = $_POST['from_currency'];
            $toCurrency = $_POST['to_currency'];
            $amount = $_POST['amount'];
        }

        // Hardcoded exchange rates
        $exchangeRates = array(
            'USD' => array(
                'EUR' => 0.85,
                'GBP' => 0.72
            ),
            'EUR' => array(
                'USD' => 1.18,
                'GBP' => 0.85
            ),
            'GBP' => array(
                'USD' => 1.38,
                'EUR' => 1.18
            )
        );

        // Check if conversion is possible
        if (isset($exchangeRates[$fromCurrency]) && isset($exchangeRates[$fromCurrency][$toCurrency])) {
            // Calculate converted amount
            $convertedAmount = $amount * $exchangeRates[$fromCurrency][$toCurrency];
        } else {
            // Invalid conversion = 0
            $convertedAmount = '0';
        }
    ?>

    <form method="post">
        <div>
            <label for="from_currency">From:</label>
            <input type="number" id="amount" name="amount" step="0.01" value="<?php echo $amount; ?>" required>
            <label for="amount">Currency:</label>
            <select id="from_currency" name="from_currency">
                <option value="USD" <?php if ($fromCurrency == 'USD') echo 'selected'; ?>>USD</option>
                <option value="EUR" <?php if ($fromCurrency == 'EUR') echo 'selected'; ?>>EUR</option>
                <option value="GBP" <?php if ($fromCurrency == 'GBP') echo 'selected'; ?>>GBP</option>
            </select>
        </div>

        <div>
            <label for="to_currency">To:</label>
            <label class="result"><?php echo $convertedAmount; ?></label>
            <label for="amount">Currency:</label>
            <select id="to_currency" name="to_currency">
                <option value="USD" <?php if ($toCurrency == 'USD') echo 'selected'; ?>>USD</option>
                <option value="EUR" <?php if ($toCurrency == 'EUR') echo 'selected'; ?>>EUR</option>
                <option value="GBP" <?php if ($toCurrency == 'GBP') echo 'selected'; ?>>GBP</option>
            </select>
        </div>
        <button class="submit-button" type="submit">Convert</button>
    </form>
</body>

</html>


