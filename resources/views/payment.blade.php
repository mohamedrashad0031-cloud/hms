<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Details</title>

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

/* ================= MAIN ================= */
.main{
    margin-left:260px;
    padding:30px;
}

/* PAGE TITLE */
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
    text-align:left;
    font-size:14px;
}

tbody td{
    padding:14px;
    border-bottom:1px solid #eee;
    font-size:14px;
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

.card{ background:#3498db; color:#fff; }
.online{ background:#9b59b6; color:#fff; }
.cash{ background:#27ae60; color:#fff; }

.paid{ color:#27ae60; font-weight:600; }
.pending{ color:#e67e22; font-weight:600; }
.failed{ color:#c0392b; font-weight:600; }

/* LOGOUT */
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
    <a href="">💳 Payments</a>
    <a href="#">🧑‍💼 Staff</a>

    <button class="logout-btn">🚪 Logout</button>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <h1>Payment Details</h1>

    <table>
        <thead>
        @foreach($paymants as $paymant)
<tr>
    <td>{{ $payment->id }}</td>
    <td>{{ $payment->booking_id }}</td>
    <td>{{ $payment->payment_method }}</td>
    <td>₹{{ $payment->amount }}</td>
    <td>{{ $payment->payment_status }}</td>
    <td>{{ $payment->payment_date }}</td>
</tr>
@endforeach

        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Ramesh Kumar</td>
                <td>Deluxe Room</td>
                <td><span class="badge card">Card</span></td>
                <td>₹3,500</td>
                <td class="paid">Paid</td>
                <td>12-08-2024</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Suite Room</td>
                <td><span class="badge online">Online</span></td>
                <td>₹7,000</td>
                <td class="paid">Paid</td>
                <td>13-08-2024</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Priya</td>
                <td>Standard Room</td>
                <td><span class="badge cash">Cash</span></td>
                <td>₹2,500</td>
                <td class="paid">Paid</td>
                <td>14-08-2024</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Arun</td>
                <td>Deluxe Room</td>
                <td><span class="badge online">Online</span></td>
                <td>₹3,500</td>
                <td class="pending">Pending</td>
                <td>15-08-2024</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Kavya</td>
                <td>Suite Room</td>
                <td><span class="badge card">Card</span></td>
                <td>₹7,000</td>
                <td class="failed">Failed</td>
                <td>16-08-2024</td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
