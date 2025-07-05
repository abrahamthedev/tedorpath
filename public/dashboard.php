<?php

require_once '../sessions/session.php'; // Protect the page

// Example session variables
$userName = $_SESSION['user_name'];
$userRole = $_SESSION['user_role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Tedor Path</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <style>
        /* Inline Styles for Simplicity - You can move this to dashboard.css */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }
        .navbar {
            background-color: #ff6600; /* Orange */
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        .navbar a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            padding: 30px;
        }
        h1 {
            color: #007fff; /* Azure */
            margin-bottom: 10px;
        }
        .role {
            font-size: 1rem;
            color: #ff6600;
            margin-bottom: 30px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card h2 {
            margin-top: 0;
            color: #007fff;
        }
        .logout-btn {
            background-color: #ff3333;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">Tedor Path</div>
        <div class="nav-links">
            <a href="#">Profile</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Main Dashboard Content -->
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($userName); ?>!</h1>
        <div class="role">Role: <?php echo ucfirst($userRole); ?></div>

        <div class="cards">
            <div class="card" onclick="location.href='courses.php';">
                <h2>View Courses</h2>
                <p>Explore all the available summer courses at Tedor Path.</p>
            </div>

            <div class="card" onclick="location.href='enroll.php';">
                <h2>Enroll Now</h2>
                <p>Start your learning journey by enrolling in your preferred courses.</p>
            </div>

            <div class="card" onclick="location.href='profile.php';">
                <h2>Profile</h2>
                <p>View and manage your personal information and course history.</p>
            </div>

            <?php if ($userRole == 'admin') : ?>
                <div class="card" onclick="location.href='../admin/index.php';">
                    <h2>Admin Panel</h2>
                    <p>Manage users, courses, and system settings.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
