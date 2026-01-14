<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grand Horizon | Guests</title>

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

/* SIDEBAR */
.sidebar{
    width:260px;
    height:100vh;
    background:linear-gradient(180deg,#34495e,#2c3e50);
    position:fixed;
    top:0;left:0;
    color:#fff;
    padding:20px;
}

.sidebar h2{
    text-align:center;
    margin-bottom:5px;
}
.sidebar span{
    display:block;
    text-align:center;
    font-size:12px;
    color:#ccc;
    margin-bottom:25px;
}

.sidebar a{
    display:block;
    padding:12px;
    margin:8px 0;
    background:#34495e;
    color:#fff;
    text-decoration:none;
    border-radius:10px;
    transition:.3s;
}
.sidebar a:hover{
    background:#1abc9c;
    transform:translateX(5px);
}

/* MAIN */
.main{
    margin-left:260px;
    padding:30px;
}

/* TITLE */
.main h1{
    color:#2c3e50;
    margin-bottom:20px;
}

/* TABLE */
.table-container{
    background:#fff;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
    overflow:hidden;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#2c3e50;
    color:#fff;
}

th,td{
    padding:14px;
    text-align:left;
    font-size:14px;
}

tbody tr:nth-child(even){
    background:#f4f6f8;
}

tbody tr:hover{
    background:#e0f7f3;
}

/* STATUS */
.status{
    padding:6px 10px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}
.checked-in{
    background:#1abc9c;
    color:#fff;
}
.checked-out{
    background:#e74c3c;
    color:#fff;
}

/* BUTTON */
.btn{
    padding:6px 10px;
    background:#34495e;
    color:#fff;
    border-radius:6px;
    text-decoration:none;
    font-size:12px;
}
.btn:hover{
    background:#1abc9c;
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
    <a href="#" style="background:#1abc9c">👤 Guests</a>
    <a href="#">📅 Bookings</a>
    <a href="#">💳 Payments</a>
    <a href="#">🧑‍💼 Staff</a>
</div>

<!-- MAIN -->
<div class="main">
    <h1>Guest List</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Guest Name</th>
                    <th>Email</th>
                    <th>Room Type</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@gmail.com</td>
                    <td>Deluxe</td>
                    <td>10 Aug 2026</td>
                    <td>12 Aug 2026</td>
                    <td><span class="status checked-in">Checked In</span></td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Sarah Lee</td>
                    <td>sarah@gmail.com</td>
                    <td>Suite</td>
                    <td>08 Aug 2026</td>
                    <td>11 Aug 2026</td>
                    <td><span class="status checked-out">Checked Out</span></td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Ravi Kumar</td>
                    <td>ravi@gmail.com</td>
                    <td>Family</td>
                    <td>12 Aug 2026</td>
                    <td>15 Aug 2026</td>
                    <td><span class="status checked-in">Checked In</span></td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Anitha Raj</td>
                    <td>anitha@gmail.com</td>
                    <td>Executive</td>
                    <td>09 Aug 2026</td>
                    <td>10 Aug 2026</td>
                    <td><span class="status checked-out">Checked Out</span></td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Michael Smith</td>
                    <td>michael@gmail.com</td>
                    <td>Single</td>
                    <td>13 Aug 2026</td>
                    <td>14 Aug 2026</td>
                    <td><span class="status checked-in">Checked In</span></td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
