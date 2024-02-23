<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background:#EAEFF2;">
    <div  style="width: 600px; margin: 0px auto; color:#747273;">

        <div style="color:#071619; margin-top: 60px; margin-bottom:20px; text-align:center; font: 700 20px 'Inter', sans-serif;">
            <h2 style="padding-bottom: 10px; margin-bottom: 0; font-size: 28px;">Hello</h2>
            <h3 style="margin-top: 5px; font-size: 18px;">Team,</h3>
        </div>

        <div style="background-color:#fff; padding:25px; text-align:center; font: 400 14px/157% 'Inter', sans-serif;">
       
            <p>
                Grievance Form-<b>MES.</b>
            </p>
        </div>

        <div style="background-color:#fff; margin-top: 30px; padding:20px 25px; margin-bottom: 30px; text-align:left; font: 400 14px/157% 'Inter', sans-serif; text-align:center;">
            
            <p>Name: {{ $det['fullname']}}</p>           
<p>Deparment: {{ $det['department']}}</p>
			
            <p>Class: {{ $det['class']}}</p>
			
            <p>Email: {{ $det['Email1']}}</p>
            <p>Phone Number: {{ $det['phonenumber']}}</p>
			
            <p>Address: {{ $det['address']}}</p>
			
            <p>Grievance: {{ $det['grievance']}}</p>
          
            
        </div>

        

    </div>

</body>

</html>