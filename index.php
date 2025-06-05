<?php 
session_start();
if(!isset($_SESSION['user_id'])){
  header("Locarion: login.php");
  exit();
}

include('includes/db.php');
include('includes/navbar.php');
include('includes/footer.php');
?>

<!-- Dashboard page -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/attendanceportal/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>   
   <div class="sidebar">
        <h2>PORTAL</h2>
        <ul>
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="#">Employees</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="attendance_sheet.php">Attendance Sheet</a></li>
            <li><a href="sheet_report.php">Sheet Report</a></li>
            <li><a href="attendance_logs.php">Attendance Logs</a></li>
        </ul>
        <div class="user-profile">
            <div class="profile-info">
                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['user_name']); ?>&background=random" alt="Profile" class="profile-img">
                <div class="profile-name">
                    <span class="user-name"><?php echo $_SESSION['user_name']; ?></span>
                    <span class="user-role"><?php echo ucfirst($_SESSION['user_role']); ?></span>
                </div>
            </div>
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Dashboard</h2>
            <p>Welcome to Simple Attendance Management System</p>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="card-icon"><i class="fa fa-user fa-3x"></i></div>
                <p class="card-label">TOTAL EMPLOYEES</p>
                <h3 id="totalEmployees">7</h3>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa fa-check-square fa-3x"></i></div>
                <p class="card-label">ON TIME TODAY</p>
                <div class="circle-progress">
                  <svg width="60" height="60">
                    <circle cx="30" cy="30" r="25" stroke="#009688" stroke-width="5" fill="none"/>
                    <circle cx="30" cy="30" r="25" stroke="#e0e0e0" stroke-width="5" fill="none" stroke-dasharray="157" stroke-dashoffset="40"/>
                  </svg>
                </div>
                <h3 id="onTimeToday">4</h3>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa fa-exclamation-triangle fa-3x"></i></div>
                <p class="card-label">LATE TODAY</p>
                <div class="circle-progress">
                  <svg width="60" height="60">
                    <circle cx="30" cy="30" r="25" stroke="#009688" stroke-width="5" fill="none"/>
                    <circle cx="30" cy="30" r="25" stroke="#e0e0e0" stroke-width="5" fill="none" stroke-dasharray="157" stroke-dashoffset="100"/>
                  </svg>
                </div>
                <h3 id="lateToday">3</h3>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa fa-clock fa-3x"></i></div>
                <p class="card-label">ON TIME PERCENTAGE</p>
                <div class="circle-progress">
                  <svg width="60" height="60">
                    <circle cx="30" cy="30" r="25" stroke="#009688" stroke-width="5" fill="none"/>
                    <circle cx="30" cy="30" r="25" stroke="#e0e0e0" stroke-width="5" fill="none" stroke-dasharray="157" stroke-dashoffset="67"/>
                  </svg>
                </div>
                <h3 id="onTimePercent">57.1%</h3>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa fa-sliders-h fa-3x"></i></div>
                <p class="card-label">AVAILABLE SCHEDULES</p>
                <div class="circle-progress">
                  <svg width="60" height="60">
                    <circle cx="30" cy="30" r="25" stroke="#009688" stroke-width="5" fill="none"/>
                  </svg>
                </div>
                <h3 id="availableSchedules">5</h3>
            </div>
        </div>
    </div>

    <script src="/attendanceportal/js/script.js"></script>

</body>

</html>