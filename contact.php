<?php 
include 'partials/header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background:url('pic94.jpg');
    background-size:cover;
    background-position: center;
    margin-bottom: -500px;
        }
        .contact-info {
    margin-bottom: 20px;
    /* padding: 10px; */
    margin-left: 200px;
    justify-content: center;
    margin-top: 60px;
    font-weight: bolder;
    font-size: 20px;
    text-shadow: 10px 9px 10px #14c4cd;
}
        .contact-info i {
            margin-right: 10px;
        }
        .feedback-form {
    float: right;
    /* width: 500px; */
    margin-left: 200px;
    /* padding: 200px; */
    margin-top: -400px;
    background: #00000047;
    margin-right: 50px;
    height: 400px;
    padding: 70px;
    border-radius: 50px;
}
form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    width: 450px;
}
        .feedback-form textarea {
            width: 100%;
            height: 100px;
            resize: none;
            margin-bottom: 10px;
            border-radius: 25px;
        }
        h2{    
            color:black;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .feedback-form button {
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    cursor: pointer;
    width: 100px;
    border-radius: 20px;
}
        section.contact123 {
    height: 500px;
    margin-top: 100px;
    margin-bottom: 100px;
    
}
        /* Popup message style */
        .popup {
            display: none;
            position: fixed;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <section class="contact123">
        <h2><center>GET IN TOUCH</center></h2>
    <!-- Contact Information -->
    <div class="contact-info">
        <i class="fas fa-map-marker-alt"></i>
        <span>Address</span>
        <p>Virajpet,Kodagu<br>571218</p>
    </div>
    <div class="contact-info">
        <i class="fas fa-phone"></i>
        <span>Phone Number</span>
        <p>9482498077<br>9845874820</p>
    </div>
    <div class="contact-info">
        <i class="far fa-envelope"></i>
        <span>E-mail</span>
        <p>bjbhavanyaswanth@gmail.com<br>snehapm580@gmail.com</p>
    </div>

    <!-- Feedback Form -->
    <div class="feedback-form">
        <h2>Send Feedback</h2>
        <form id="feedbackForm">
            <textarea id="feedback" name="feedback" placeholder="Enter your feedback here..." required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- Popup message -->
    <div id="popup" class="popup">Thank you for your Feedback</div>

    <!-- Font Awesome CDN for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        // Function to display pop-up message
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
            // Hide the pop-up after 3 seconds
            setTimeout(function(){
                popup.style.display = "none";
            }, 3000);
        }

        // Submit feedback form
        document.getElementById("feedbackForm").addEventListener("submit", function(event){
            event.preventDefault(); // Prevent default form submission
            showPopup(); // Display pop-up message
            document.getElementById("feedback").value = ''; // Clear the textarea

            // You can add code here to handle form submission (e.g., sending feedback data to server)
        });
    </script>
    </section>
</body>
</html>
<?php
include './partials/footer.php';
?>