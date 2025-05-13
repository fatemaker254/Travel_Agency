<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Independent Contact Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }

        /* Contact Us Button */
        #contactBtn {
            position: fixed;
            top: 50%;
            right: 40px;
            transform: rotate(-90deg) translate(50%, 50%);
            transform-origin: right;
            background-color: #800080;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            z-index: 999;
        }

        /* Full Form Popup */
        .popup-form {
            display: none;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            padding: 20px;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            z-index: 2000;
        }

        /* Mini Form */
        .mini-form {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #fff;
            padding: 15px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1500;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 22px;
            cursor: pointer;
        }

        form input,
        form textarea,
        form button {
            width: 100%;
            margin: 8px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        form button {
            background-color: #800080;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        form button:hover {
            background-color: #5e005e;
        }
    </style>
</head>

<body>

    <!-- Contact Button -->
    <button id="contactBtn">Contact Us</button>

    <!-- Full Form -->
   <!-- Full Form -->
<div class="popup-form" id="fullForm">
  <span class="close" id="closeFull">&times;</span>
  <h3>Speak to one of our specialists</h3>
  <form id="formFull" action="https://formsubmit.co/278ecd959628ef87e3eeeb2ee3c90fd4" method="POST">
    <input type="text" name="name" placeholder="Name*" required />
    <input type="text" name="mobile" placeholder="Mobile No*" required />
    <input type="email" name="email" placeholder="Email ID*" required />
    <input type="text" name="destination" placeholder="Destination*" required />
    <textarea name="message" rows="4" required
      placeholder="Additional information (Month of travel, no. of guest, duration of travel)"></textarea>
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_next" value="http://localhost/Travel_Agency/tourism/index.php">
      <input type="hidden" name="_template" value="table">
    <button type="submit">Submit</button>
  </form>
</div>

<!-- Mini Form -->
<div class="mini-form" id="miniForm">
  <span class="close" id="closeMini">&times;</span>
  <h4>Quick Contact</h4>
  <form id="formMini" action="https://formsubmit.co/278ecd959628ef87e3eeeb2ee3c90fd4" method="POST">
    <input type="text" name="name" placeholder="Name*" required />
    <input type="text" name="mobile" placeholder="Mobile No*" required />
    <input type="email" name="email" placeholder="Email ID*" required />
    <input type="text" name="destination" placeholder="Destination*" required />
    <textarea name="message" placeholder="Additional info"></textarea>
    <input type="hidden" name="_next" value="http://localhost/Travel_Agency/tourism/index.php">

    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <button type="submit">Submit</button>
  </form>
</div>


    <script>
        const contactBtn = document.getElementById("contactBtn");
        const fullForm = document.getElementById("fullForm");
        const miniForm = document.getElementById("miniForm");
        const closeFull = document.getElementById("closeFull");
        const closeMini = document.getElementById("closeMini");

        // Show full form on button click
        contactBtn.onclick = () => {
            fullForm.style.display = "block";
        };

        // Close full form
        closeFull.onclick = () => {
            fullForm.style.display = "none";
        };

        // Close mini form
        closeMini.onclick = () => {
            miniForm.style.display = "none";
        };

        // Show mini form every 5 seconds (adjust to 300000 for 5 mins)
        setInterval(() => {
            miniForm.style.display = "block";
        }, 120000);

        // Prevent both forms from interfering with each other
        // document.getElementById("formFull").onsubmit = (e) => {
        //     e.preventDefault();
        //     alert("Full Form Submitted!");
        //     fullForm.style.display = "none";
        // };

        // document.getElementById("formMini").onsubmit = (e) => {
        //     e.preventDefault();
        //     alert("Mini Form Submitted!");
        //     miniForm.style.display = "none";
        // };
    </script>

</body>

</html>