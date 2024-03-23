<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Companies</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('comp1.jpg') center center fixed; /* Replace with your background image URL */
            background-size: cover;
            color: #fff; /* Text color for better visibility on the background */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #companyForm {
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            background-size: cover;
            opacity: 0.9; /* Adjust the opacity for better visibility of text on the background */
            background-color:white;
        }   

        h1, p {
            margin: 0;
            margin-bottom: 20px; /* Spacing between header and form */
            color: black; /* Change text color to black */
        }

        input {
            width: 70%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-top: 20px;
            color: #000; /* Input text color */
            background: transparent; /* Make input background transparent */
        }

        button {
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Company Section -->
<div class="right-section" id="companyForm">
    <h1>For Companies</h1>
    <p>Explore Talented Candidates</p>
    
    <!-- Company Login Form -->
    <form action="search_candidates2.php" method="post">
        <input type="text" name="skill" placeholder="Enter the skills that your company wants" required>
        <button type="submit">Search</button>
    </form>
</div>

</body>
</html>
