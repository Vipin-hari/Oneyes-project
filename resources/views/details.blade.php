<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css">
 -->
 <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #262222;
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
    .content {
    display: flex;
    align-items: flex-start;
    padding: 20px;
    background:black;
    margin:10px;
}

.image-card {
    flex: 0 0 30%; 
    padding: 20px;
}

.image-card img {
    max-width: 100%;
    height: auto;
    display: block;
}

.description {
    flex: 1; /* Remaining portion */
    padding: 20px;
}

/* Mobile responsiveness */
@media (max-width: 600px) {
    .content {
        flex-direction: column;
    }

    .image-card {
        flex: 1; /* Take full width on mobile */
        padding: 0;
    }
}
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
    <div class="content">
        <div class="image-card">
            <img src="placeholder.jpg" alt="Image">
        </div>
        <div class="description">
            <h1>Welcome to Our Website</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ultricies ex. Nullam quis scelerisque purus. Sed sed sapien vel purus lacinia tincidunt in in sapien. Suspendisse potenti.</p>
        </div>
    </div>
    
</body>
</html>
