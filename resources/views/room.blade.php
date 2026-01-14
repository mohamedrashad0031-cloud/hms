<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grand Horizon | Rooms</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,Arial;
}

/* BODY */
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

/* PAGE TITLE */
.main h1{
    color:#2c3e50;
    margin-bottom:20px;
}

/* ROOM GRID */
.room-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

/* ROOM CARD */
.card{
    background:#fff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 18px rgba(0,0,0,.15);
    transition:.3s;
}
.card:hover{
    transform:translateY(-8px);
}

/* IMAGE */
.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

/* CARD CONTENT */
.card-content{
    padding:16px;
}
.card-content h3{
    color:#2c3e50;
    margin-bottom:6px;
}
.card-content p{
    font-size:14px;
    color:#555;
    margin-bottom:10px;
}
.price{
    font-size:18px;
    font-weight:bold;
    color:#16a085;
}
.time{
    font-size:13px;
    color:#777;
    margin-top:5px;
}

/* BUTTON */
.btn{
    margin-top:12px;
    display:inline-block;
    padding:10px 14px;
    background:#2c3e50;
    color:#fff;
    border-radius:8px;
    text-decoration:none;
    font-size:14px;
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
    <a href="#" style="background:#1abc9c">🏨 Rooms</a>
    <a href="#">👤 Guests</a>
    <a href="#">📅 Bookings</a>
    <a href="#">💳 Payments</a>
    <a href="#">🧑‍💼 Staff</a>
</div>

<!-- MAIN -->
<div class="main">
    <h1>Available Rooms</h1>

    <div class="room-grid">

        <!-- ROOM 1 -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945">
            <div class="card-content">
                <h3>Deluxe Room</h3>
                <p>AC • Free WiFi • Smart TV</p>
                <div class="price">₹3,500 / Night</div>
                <div class="time">Check-in: 12 PM | Check-out: 11 AM</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

   


        <!-- ROOM 4 -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427">
            <div class="card-content">
                <h3>Family Room</h3>
                <p>2 Beds • Kids Friendly • AC</p>
                <div class="price">₹5,000 / Night</div>
                <div class="time">Check-in: 12 PM | Check-out: 11 AM</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

        <!-- ROOM 5 -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b">
            <div class="card-content">
                <h3>Single Room</h3>
                <p>Budget • WiFi • Non-AC</p>
                <div class="price">₹2,000 / Night</div>
                <div class="time">Check-in: 2 PM | Check-out: 12 PM</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
