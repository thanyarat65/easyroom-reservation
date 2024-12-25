
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>    
    <title>Floor Layout</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .room:hover {
            transform: scale(1.05);
        }
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-color: #d9c1ab;
}

header {
    background-color: #d9c1ab;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 2px solid #000;
}

.floor-buttons {
    display: flex;
    gap: 15px;
}

.floor-buttons button {
    background-color: #6c34a3;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
}

.floor-buttons button:hover {
    background-color: #563080;
}

main {
    display: flex;
    flex: 1;
}

.layout {
    flex: 3;
    background-color: white;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(7, 1fr);
    gap: 1px;
    border: 2px solid #000; /* ขอบสีดำ */
    border-radius: 15px; /*ขอบมน*/
    position: relative;
    width: 100%; /* กำหนดความกว้าง */
    height: calc(100vh - 50px); /* ปรับความสูงให้ลดลงจาก header */
    overflow: auto; /* ให้สามารถเลื่อนดูเนื้อหาได้ */
    box-sizing: border-box; /* รวมขอบและ padding */
}

.circle {
    content: 'ไม่ว่าง';
    position: absolute;
    top: 10px;
    right: 10px;
    width: 30px;
    height: 30px;
    background-color: red;
    border: 2px solid white;
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    font-size: 10px; 
    color: white; 
  }

.room {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    text-align: center;
    border: 2px solid #000;
    border-radius: 10px;
    background-color: #d9534f;
    color: white;
}

.space {
    display: flex;
    justify-content: center;
    align-items: center;
}

.space.large {
    grid-column: span 2;
    grid-row: span 2;
}

.space.smalls {
    grid-column: span 1;
    grid-row: span 2;
}

.room.large {
    grid-column: span 2;
    grid-row: span 2;
    background-color: #E54715;
}

.room.vertical {
    grid-row: span 2;
    background-color: #E54715;
}

.room.small {
    grid-column: span 1;
    grid-row: span 1;
    background-color: #E54715;
}

.room.men {
    grid-column: span 1;
    grid-row: span 1;
    background-color: #E54715;
}

.room.women {
    grid-column: span 1;
    grid-row: 2;
    grid-column: 10;
    background-color: #E54715;
}

.room.large.bottom {
    grid-column: 1 / span 1;
    grid-row: 6 / span 2;
    background-color: grey;
    
}

.room.large.bottom2 {
    grid-column: 2 / span 1;
    grid-row: 6 / span 2;
    background-color: grey;
}

.room.large.bottom3 {
    grid-column: 3 / span 1;
    grid-row: 6 / span 2;
    background-color: #E54715;
}

.room.large.bottom4 {
    grid-column: 6 / span 2;
    grid-row: 6 / span 2;
    background-color: #E54715;
}

.room.large.bottom5 {
    grid-column: 8 / span 2;
    grid-row: 6 / span 2;
    background-color: #E54715;
}

.room.large.bottom6 {
    grid-column: 12 / span 1;
    grid-row: 6 / span 2;
    background-color: #E54715;
}

.room.smallss.bottoms1 {
    grid-column: 4 / span 1;
    grid-row: 7 / span 1;
    background-color: #E54715;
}

.available {
    position: relative;
    background-color: #28a745;
    color: white;
}
.room .status {
    content: 'ว่าง';
    position: absolute;
    top: 10px;
    right: 10px;
    width: 30px;
    height: 30px;
    background-color: #28a745;
    border: 2px solid white;
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    font-size: 10px; 
    color: white; 
}
.Notavailable {
    position: relative;
    background-color: red;
    color: white;
}
.room .statusN {
    content: 'ไม่ว่าง';
    position: absolute;
    top: 10px;
    right: 10px;
    width: 30px;
    height: 30px;
    background-color: red;
    border: 2px solid white;
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    font-size: 10px; 
    color: white; 
}
.center {
    align-items: center;
    grid-column: 5 / span 6;
    grid-row: 4 / span 1;
    border: 2px solid #000;
    border-radius: 15px;
    background-color: #fff;
}

.sidebar {
    flex: 1;
    background-color: #f8f9fa;
    padding: 20px;
    display: flex;
    flex-direction: column;
    border-left: 2px solid #000;
}

.sidebar h2 {
    margin-bottom: 20px;
}

.categories {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.categories li {
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border: 1px solid #000000;
    border-radius: 20px;
    background-color: #fff;
}

.categories li span {
    background-color: #eb0f0f;
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
}

.reports {
    flex: 1;
    overflow-y: auto;
    margin-bottom: 20px;
    text-align: left; /* จัดข้อความชิดซ้าย */
}

.report-item {
    display: flex;
    align-items: center;
    gap: 10px; /* เพิ่มช่องว่างระหว่างไอคอนกับข้อความ */
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 20px;
    background-color: #fff;
    text-align: left; /* จัดข้อความชิดซ้าย */
}

.report {
    background-color: #fff3cd;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #000000;
    border-radius: 5px;
}

.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup.hidden {
    display: none;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: relative;
}

.icon {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    font-size: 18px;
    color: rgb(0, 0, 0);
    flex-shrink: 0; /* ป้องกันไอคอนถูกบีบ */
}

.icon-red {
    background-color: red;
}

.icon-green {
    background-color: green;
}


    </style>
</head>
<body>
    <main>
        <div class="layout">
            <div class="space large"></div>
            <div class="space small"></div>
            <div class="room small">SC2-213</div>
            <div class="space smalls"></div>
            <div class="room large">SC2-214</div>
            <div class="room large">SC2-215</div>
            <div class="room men">ห้องสุขา อจ ชาย</div>
            <div class="room women">ห้องสุขา อจ หญิง</div>
            <div class="space smalls"></div>
            <div class="room vertical">SC2-201</div>
            <div class="center"></div>
            <div class="room large bottom available"data-popup ="true"><span class="status">ว่าง</span>SC2-212</div>
            <div class="room large bottom2 available"data-popup = "true"><span class="statusN">ไม่ว่าง</span>SC2-211</div>
            <div class="room large bottom3">SC2-210</div>
            <div class="room smallss bottoms1">SC2-209</div>
            <div class="room large bottom4">SC2-208</div>
            <div class="room large bottom5">SC2-207</div>
            <div class="room large bottom6">SC2-206</div>
        </div>
        <div class="sidebar">
            <div class="reports">
                <div class="report-item">
                    <span class="icon icon-red"></i></span> <!-- ไอคอนจองไม่ได้ -->
                    <span>จองไม่ได้</span>
                </div>
                <div class="report-item">
                    <span class="icon icon-green"></i></span> <!-- ไอคอนจองได้ -->
                    <span>จองได้</span>
                </div>
                <div class="report-item">
                    <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span> <!-- ไอคอนห้องเล็กเชอร์ -->
                    <span>ห้องเล็กเชอร์</span>
                </div>
                <div class="report-item">
                    <span class="icon"><i class="fas fa-laptop-code"></i></span> <!-- ไอคอนห้องปฏิบัติการ -->
                    <span>ห้องปฏิบัติการ</span>
                </div>
                <div class="report-item">
                    <span class="icon"><i class="fas fa-users"></i></span> <!-- ไอคอนห้องประชุม -->
                    <span>ห้องประชุม</span>
                </div>  
            </div>

        </div>
    </main>

    <div id="popup" class="popup hidden">
        <div class="popup-content">
            <span class="close-button">&times;</span>
            <h2>Room Details</h2>
            <p id="room-details">Details about the room...</p>
        </div>
    </div>
    <script>const rooms = document.querySelectorAll('.room');
        const popup = document.getElementById('popup');
        const popupContent = document.getElementById('room-details');
        const closeButton = document.querySelector('.close-button');
        
        // Add click event to each room
        rooms.forEach(room => {
            room.addEventListener('click', () => {
                if (room.getAttribute('data-popup') === 'true') { // Check if popup is allowed
                    const roomText = room.textContent;
                    popupContent.textContent = `Details about ${roomText}`;
                    popup.classList.remove('hidden');
                }
            });
        });
        
        // Add click event to close button
        closeButton.addEventListener('click', () => {
            popup.classList.add('hidden');
        });
        
        // Close popup when clicking outside content
        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.classList.add('hidden');
            }
        });
        </script>
</body>

</html>