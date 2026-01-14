<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Staff Details</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,Arial;
}

body{
    background:#ecf0f1;
}

/* ================= SIDEBAR ================= */
.sidebar{
    width:260px;
    height:100vh;
    background:linear-gradient(180deg,#34495e,#2c3e50);
    position:fixed;
    left:0;
    top:0;
    color:#fff;
    padding:20px;
}

.sidebar h2{
    text-align:center;
}
.sidebar span{
    font-size:12px;
    color:#ccc;
    display:block;
    text-align:center;
    margin-bottom:20px;
}

.sidebar a{
    display:block;
    padding:12px;
    margin:8px 0;
    background:#34495e;
    color:#fff;
    text-decoration:none;
    border-radius:8px;
    transition:.3s;
}

.sidebar a:hover{
    background:#1abc9c;
}

.logout-btn{
    margin-top:20px;
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#c0392b;
    color:#fff;
    cursor:pointer;
}
.logout-btn:hover{
    background:#e74c3c;
}

/* ================= MAIN ================= */
.main{
    margin-left:260px;
    padding:30px;
}

h1{
    margin-bottom:20px;
    color:#2c3e50;
}

/* ================= TABLE ================= */
table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

thead{
    background:#34495e;
    color:#fff;
}

thead th{
    padding:15px;
    font-size:14px;
    text-align:left;
}

tbody td{
    padding:14px;
    font-size:14px;
    border-bottom:1px solid #eee;
}

tbody tr:hover{
    background:#f1f1f1;
}

/* BADGES */
.badge{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.admin{ background:#e74c3c; color:#fff; }
.reception{ background:#3498db; color:#fff; }
.housekeeping{ background:#27ae60; color:#fff; }
.manager{ background:#9b59b6; color:#fff; }

/* STATUS */
.active{
    color:#27ae60;
    font-weight:600;
}
.inactive{
    color:#c0392b;
    font-weight:600;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Grand Horizon</h2>
    <span>Hotel Management</span>

    <a href="#">🏠 Dashboard</a>
    <a href="#">🏨 Rooms</a>
    <a href="#">👤 Guests</a>
    <a href="#">📅 Bookings</a>
    <a href="#">💳 Payments</a>
    <a href="#">🧑‍💼 Staff</a>

    <button class="logout-btn">🚪 Logout</button>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <h1>Staff Details</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Staff Name</th>
                <th>Role</th>
                <th>Department</th>
                <th>Shift</th>
                <th>Contact</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Arun Kumar</td>
                <td><span class="badge manager">Manager</span></td>
                <td>Administration</td>
                <td>Morning</td>
                <td>9876543210</td>
                <td class="active">Active</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Priya</td>
                <td><span class="badge reception">Receptionist</span></td>
                <td>Front Desk</td>
                <td>Morning</td>
                <td>9123456780</td>
                <td class="active">Active</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Ramesh</td>
                <td><span class="badge housekeeping">Housekeeping</span></td>
                <td>Cleaning</td>
                <td>Evening</td>
                <td>9988776655</td>
                <td class="active">Active</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Kavya</td>
                <td><span class="badge reception">Receptionist</span></td>
                <td>Front Desk</td>
                <td>Night</td>
                <td>9001122334</td>
                <td class="inactive">Inactive</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Suresh</td>
                <td><span class="badge admin">Admin</span></td>
                <td>Management</td>
                <td>Full Day</td>
                <td>9555666777</td>
                <td class="active">Active</td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
