<?php
$from_email='norepl@nftprj.com';
$email_to = 'triumphant.creditlimited@gmail.com';

if (isset($_POST['submit'])) {
    $backend_message='';

    $i=0;
    foreach ($_POST as $key => $value) {
        if($i<count($_POST)-1){
            $backend_message.= htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
        }
        $i++;
    }

    $subject = 'Triumphant Contact Info';

    $headers = "From: Triumphant Credit Limited <" . $from_email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <p style='text-align: center;color:green;font-weight:bold'>New Triumphant Credit Limited</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                alert('Contact Successful');
                window.location.href='contactus.html';
                </script>";
    } else {
        echo "<script>
                alert('Contact Unsuccessful');
                window.location.href='contactus.html';
                </script>";
    }
}
