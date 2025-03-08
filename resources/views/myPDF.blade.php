
 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > -->

    <!-- <img src="E:\3_2\web(sultam sir)\laravel\pdfdown\images.jpeg" style="width: 150px; height: auto; margin-bottom: 20px;"> -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>CV with Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }
        .header .info {
            flex-grow: 1;
        }
        .header .info h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .header .info p {
            margin: 5px 0;
            color: #666;
        }
        .section {
            margin-top: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            color: #444;
        }
        .section ul {
            list-style: none;
            padding: 0;
        }
        .section ul li {
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="E:\3_2\web(sultam sir)\laravel\pdfdown\1539064593_0.jpg" alt="Profile Picture">
            <div class="info">
                <h1>Iffat Jinnat Badhon</h1>
                <p>Email: IJB@gmail.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: Tangail</p>
            </div>
        </div>

        <div class="section">
            <h2>Education</h2>
            <ul>
                <li><strong>Degree:</strong> Bachelor of Science in Computer Science, MBSTU (Year)</li>
                <li><strong>Degree:</strong> ABC High School (Year)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Experience</h2>
            <ul>
                <li><strong>Job Title:</strong> Web Developer at Company Name (Year - Present)</li>
                <li><strong>Job Title:</strong> Intern at Another Company (Year - Year)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>React, Angular, Vue.js</li>
                <li>Node.js, Python, Java</li>
                <li>Database Management (SQL, MongoDB)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Projects</h2>
            <ul>
                <li><strong>Project Name:</strong> Description of the project and your role.</li>
                <li><strong>Project Name:</strong> Description of the project and your role.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Languages</h2>
            <ul>
                <li>English (Fluent)</li>
                <li>Spanish (Intermediate)</li>
                <li>French (Basic)</li>
            </ul>
        </div>
    </div>
</body>
</html>

