<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grand Horizon | Room Bookings</title>

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

.main h1{
    margin-bottom:20px;
    color:#2c3e50;
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

th, td{
    padding:14px;
    font-size:14px;
    text-align:left;
}

tbody tr:nth-child(even){
    background:#f4f6f8;
}

tbody tr:hover{
    background:#e0f7f3;
}

/* STATUS */
.status{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}
.confirmed{
    background:#1abc9c;
    color:#fff;
}
.pending{
    background:#f39c12;
    color:#fff;
}
.cancelled{
    background:#e74c3c;
    color:#fff;
}

/* BUTTON */
.btn{
    padding:6px 10px;
    border-radius:6px;
    text-decoration:none;
    font-size:12px;
    color:#fff;
}
.view{background:#34495e;}
.view:hover{background:#1abc9c;}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Grand Horizon</h2>
    <span>Hotel Management</span>

    <a href="#">🏠 Dashboard</a>
    <a href="#">🏨 Rooms</a>
    <a href="#" style="background:#1abc9c">📅 Bookings</a>
    <a href="#">👤 Guests</a>
    <a href="#">💳 Payments</a>
    <a href="#">🧑‍💼 Staff</a>
</div>

<!-- MAIN -->
<div class="main">
    <h1>Room Bookings</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Guest Name</th>
                    <th>Room No</th>
                    <th>Room Type</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Nights</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>101</td>
                    <td>Deluxe</td>
                    <td>10 Aug 2026</td>
                    <td>12 Aug 2026</td>
                    <td>2</td>
                    <td>₹7,000</td>
                    <td><span class="status confirmed">Confirmed</span></td>
                    <td><a class="btn view" href="#">View</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Sarah Lee</td>
                    <td>203</td>
                    <td>Suite</td>
                    <td>08 Aug 2026</td>
                    <td>11 Aug 2026</td>
                    <td>3</td>
                    <td>₹15,000</td>
                    <td><span class="status pending">Pending</span></td>
                    <td><a class="btn view" href="#">View</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Ravi Kumar</td>
                    <td>305</td>
                    <td>Family</td>
                    <td>12 Aug 2026</td>
                    <td>15 Aug 2026</td>
                    <td>3</td>
                    <td>₹12,000</td>
                    <td><span class="status confirmed">Confirmed</span></td>
                    <td><a class="btn view" href="#">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Anitha Raj</td>
                    <td>112</td>
                    <td>Executive</td>
                    <td>09 Aug 2026</td>
                    <td>10 Aug 2026</td>
                    <td>1</td>
                    <td>₹4,500</td>
                    <td><span class="status cancelled">Cancelled</span></td>
                    <td><a class="btn view" href="#">View</a></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Michael Smith</td>
                    <td>407</td>
                    <td>Single</td>
                    <td>13 Aug 2026</td>
                    <td>14 Aug 2026</td>
                    <td>1</td>
                    <td>₹3,000</td>
                    <td><span class="status confirmed">Confirmed</span></td>
                    <td><a class="btn view" href="#">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
