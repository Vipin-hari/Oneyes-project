<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: cursive;
            background: #262222;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .headd{
            text-align:center;
        }

        .navbar {
            background-color: #000010;
            padding: 5px 0;
            text-align: center;
            width:100%;
            /* margin:10px; */
            opacity: 0.7;
            border-radius:10px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-list {
            list-style: none;
            padding: 0;
        }

        .nav-item {
            display: inline-block;
            margin-right: 20px;
        }

        .nav-item a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-item a:hover {
            color: #0056b3;
        }

        .container {
            background-color: #ffc300;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            animation: fadeIn 2.5s ease-in-out;
            transition: background-color 0.3s;
            margin:10px
        }

        .register-form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-group {
            flex-basis: calc(50% - 10px);
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            font-size:large;
            color: #d81fcf;
            transition: color 0.3s;
        }

        input, select {
            padding: 10px;
            border: none;
            font-family:cursive;
            /* font-size:large; */
            font-weight:bold;
            border-radius: 4px;
            background-color: #00fffb;
            transition: background-color 1s, border-color 1s;
        }

        input:focus, select:focus {
            background-color: #d81fcf;
            border-color: #d81fcf;
            color:#262222;
        }
       .headd{
       
       }

        button {
            background-color: #d81fcf;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-left:160px;
            width:60%;
            /* font-weight: bold; */
            font-size:large;
            align-items:center;
            transition: background-color 3s, transform 1s;
        }

        button:hover {
            background-color:#262222;
            transform: scale(1.2);
            /* font-weight: bold; */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
/* Responsive CSS for mobile screens */
@media (max-width: 600px) {
    .container {
        max-width: 50%;
    }

    .form-group {
        flex-basis: 100%;
    }

    .register-form {
        flex-direction: column;
    }   
}
    /* Adjust padding, font size, or other styles as needed for better mobile display */
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="nav-list">
            <li class="nav-item"><a href="#">Home</a></li>
            <li class="nav-item"><a href="#">About Us</a></li>
            <li class="nav-item"><a href="#">Services</a></li>
            <li class="nav-item"><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <form class="register-form" id="registerForm">
            <h1 class="headd" style=" display:flex;
        justify-content:center;">Sign Up and explore the site yaar....!</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
               <select name="gender" id="gender" required>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Others">Others</option>
               </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="door">Door</label>
                <input type="text" id="door" name="door" required>
            </div>
            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" id="street" name="street" required>
            </div>
            <div class="form-group">
                <label for="locality">Locality</label>
                <input type="text" id="locality" name="locality" required>
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <input type="text" id="district" name="district" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" required>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>                    
                </select>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password(min 8 character including symbols)</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
