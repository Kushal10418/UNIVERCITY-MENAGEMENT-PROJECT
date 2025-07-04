<?php
session_start();
if(!isset($_SESSION['username'])){
    // Redirect to login if not logged in
    header('Location: LG.php');
    exit();
}
$username = $_SESSION['username'];
$email = $_SESSION['email'] ;
$course = $_SESSION['course'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard - KULPI ITI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f3f6fb; }
        .dashboard-container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px;
        }
        .user-info {
            background: #e3eafc;
            border-radius: 8px;
            padding: 18px 24px;
            margin-bottom: 24px;
        }
        .dropdown-menu.show {
            min-width: 200px;
        }
        .section-content {
            display: none;
            margin-top: 24px;
        }
        .section-content.active {
            display: block;
        }
        .badge { font-size: 0.95em; }
        .down-btn {
            display: inline-block;
            text-decoration: none;
            padding: 6px 16px;
            background: #2d8cff;
            color: #fff;
            border-radius: 5px;
            font-weight: 500;
            transition: background 0.2s, transform 0.2s;
        }
        .down-btn:hover {
            background: #1857b1;
            transform: translateY(-2px) scale(1.06);
        }
        @media(max-width: 600px){
            .dashboard-container { padding: 12px 4px; }
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <h2 class="text-center mb-4">👨‍🎓 Student Dashboard</h2>
    <div class="user-info mb-4">
        <strong>Name:</strong> <?=htmlspecialchars($username)?> &nbsp; 
        <strong>Email:</strong> <?=htmlspecialchars($email)?> &nbsp; 
        <strong>Course:</strong> <?=htmlspecialchars($course)?>
        <a href="wepage.php" class="btn btn-danger btn-sm float-end">Logout</a>
    </div>
    <!-- Dropdown for Sections -->
    <div class="mb-4">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="sectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Select Section
            </button>
            <ul class="dropdown-menu" aria-labelledby="sectionDropdown">
                <li><a class="dropdown-item section-link" href="#" data-section="notice">Student Notice Board</a></li>
                <li><a class="dropdown-item section-link" href="#" data-section="materials">Study Materials</a></li>
                <li><a class="dropdown-item section-link" href="#" data-section="results">Exam Results</a></li>
            </ul>
        </div>
    </div>
    <!-- Section: Notice Board -->
    <div id="section-notice" class="section-content active">
        <h4>📢 Student Notice Board</h4>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-primary">
                <tr>
                    <th>SL NO</th>
                    <th>DATE</th>
                    <th>NOTICE</th>
                    <th>CATEGORY</th>
                    <th>DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>            
                    <td>16-02-2024</td>
                    <td>Annual Sports Meet Registration</td>
                    <td><span class="badge bg-success">Sports</span></td>
                    <td><a href="IT/ad.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>2</td>            
                    <td>19-06-2025</td>
                    <td>Submission deadline for project report extended 22 June</td>
                    <td><span class="badge bg-warning text-dark">Academics</span></td>
                    <td><a href="IT/en.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>3</td>            
                    <td>16-04-2025</td>
                    <td>Library will be closed for maintenance on 17 April</td>
                    <td><span class="badge bg-info text-dark">Library</span></td>
                    <td><a href="IT/lg.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>4</td>            
                    <td>23-05-2025</td>
                    <td>Guest lecture on Web Development by industry experts in Room 24</td>
                    <td><span class="badge bg-primary">Seminar</span></td>
                    <td><a href="IT/FF.pdf" class="down-btn" download>Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Section: Study Materials -->
    <div id="section-materials" class="section-content">
        <h4>📚 Study Materials</h4>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-success">
                <tr>
                    <th>SL NO</th>
                    <th>SUBJECT</th>
                    <th>TOPIC</th>
                    <th>UPLOAD DATE</th>
                    <th>DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fitter</td>
                    <td>TRADE THEORY</td>
                    <td>10-06-2025</td>
                    <td><a href="IT/Ethernet Concepts.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>INFORMATION TECHNOLOGY</td>
                    <td>HTML & CSS Introduction</td>
                    <td>11-06-2025</td>
                    <td><a href="IT/LOOO.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Electrician</td>
                    <td>Basic Circuits</td>
                    <td>14-06-2025</td>
                    <td><a href="IT/COMPUTER.docx" class="down-btn" download>Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Section: Exam Results -->
    <div id="section-results" class="section-content">
        <h4>🎓 Exam Results</h4>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-warning">
                <tr>
                   <th>SL NO</th>
                    <th>EXAM</th>
                    <th>DATE</th>
                    <th>DEPERMENT</th>
                    <th>FRISTR YEAR DOWNLAOAD</th>
                    <th> SECOND YERA DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>INTERNAL EXAM</td>
                    <td>15-12-2025</td>
                    <td>INFORMATION TECHNOLOGY</td>
                    <td><a href="IT/result1.pdf" class="down-btn" download>Download</a></td>
                    <td><a href="IT/result1.pdf" class="down-btn" download>Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>INTERNAL EXAM</td>
                    <td>20-06-2025</td>
                    <td>FITTER</td>
                    <td><a href="IT/result1.pdf" class="down-btn" download>Download</a></td>
                    <td><a href="IT/result2.pdf" class="down-btn" download>Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Dropdown section switcher
    document.querySelectorAll('.section-link').forEach(function(link){
        link.addEventListener('click', function(e){
            e.preventDefault();
            var section = this.getAttribute('data-section');
            document.querySelectorAll('.section-content').forEach(function(sec){
                sec.classList.remove('active');
            });
            document.getElementById('section-' + section).classList.add('active');
        });
    });
</script>
</body>
</html>
