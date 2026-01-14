<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,Arial;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    height:100vh;
    background:linear-gradient(180deg,#34495e,#2c3e50);
    position:fixed;
    left:0;top:0;
    color:#fff;
    padding:20px;
}
.sidebar h2{text-align:center}
.sidebar span{font-size:12px;color:#ccc}

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
.sidebar a:hover{background:#1abc9c}

/* MAIN */
.main{
    margin-left:260px;
    padding:30px;
    background:#ecf0f1;
    min-height:100vh;
}

/* CONTENT CARD */
.card{
    background:#fff;
    border-radius:12px;
    width:300px;
    overflow:hidden;
    box-shadow:0 5px 10px rgba(0,0,0,.2);
}
.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}
.card div{padding:15px}


</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Grand Horizon</h2>
    <span>Hotel Management</span>

    <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('room') }}">🏨 Rooms</a>
    <a href="{{ route('guests') }}">👤 Guests</a>
    <a href="{{ route('bookings') }}">📅 Bookings</a>
    <a href="{{ route('payments') }}">💳 Payments</a>
    <a href="{{ route('staff') }}">🧑‍💼 Staff</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button style="margin-top:20px;width:100%;padding:12px;border:none;border-radius:8px;background:#c0392b;color:#fff">
            🚪 Logout
        </button>
    </form>
</div>

<!-- MAIN -->
<div class="main">

<!-- DASHBOARD -->
<div id="dashboard" class="section active">
    <h1>Welcome Admin</h1>
    <p>Select menu from left</p>
</div>

<!-- ROOMS -->
<div id="rooms" class="section">
    <h1>Rooms</h1>
    <div class="card">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945">
        <div>
            <h3>Deluxe Room</h3>
            <p>AC • WiFi • TV</p>
            <b>₹3500 / night</b>
        </div>
    </div>
</div>

<!-- GUESTS -->
<div id="guests" class="section">
    <h1>Guests</h1>
    <div class="card">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e">
        <div>
            <h3>John Doe</h3>
            <p>Room: Deluxe</p>
        </div>
    </div>
</div>

<!-- BOOKINGS -->
<div id="bookings" class="section">
    <h1>Bookings</h1>
    <div class="card">
        <img src="https://images.unsplash.com/photo-1501117716987-c8e1ecb2103f">
        <div>
            <h3>Suite Room</h3>
            <p>2 Nights</p>
        </div>
    </div>
</div>

<!-- PAYMENTS -->
<div id="payments" class="section">
    <h1>Payments</h1>
    <div class="card">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f">
        <div>
            <h3>Paid</h3>
            <p>₹7000</p>
        </div>
    </div>
</div>

<!-- STAFF -->
<div id="staff" class="section">
    <h1>Staff</h1>
    <div class="card">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1">
        <div>
            <h3>Receptionist</h3>
            <p>Shift: Morning</p>
        </div>
    </div>
</div>

</div>

<!-- JS -->
<!-- <script>
function showSection(id){
    document.querySelectorAll('.section').forEach(sec=>{
        sec.classList.remove('active');
    });
    document.getElementById(id).classList.add('active');
}
</script> -->

</body>
</html>
