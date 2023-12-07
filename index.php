<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Status Checker</h1>
    <form id="siteForm">
        <label for="siteULR">Enter Site URL: </label>
        <input type="text" placeholder="https://example.com" id="siteURL" required>
        <button type="button" onclick="checkStatus()">Check</button>
    </form>
    <div id="statusResult"></div>
    <script src="script.js"></script>
</body>
</html>