<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact us page template</title>
<style>
            body{
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(48, 46, 46);
            background-color: rgba(224, 217, 217, 0.863);
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 25px;
        }
        hr{
            width: 80%;
        }
        h2{
            font-size: 20px;
        }
        .contact-items{
            display: flex;
            margin: 30px auto;
            flex-wrap: wrap;
            align-items: center;

        }
        .customer-care,.write-us,.sales-market{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 28%;
            margin: 30px auto;
            padding: 35px 15px;
            border-radius: 15px;
            text-align: center;
            min-width: 250px;
            
        }
        .customer-care{
            height: 250px;
            box-shadow: 0 15px 15px green;
            border: 1px solid green;
        }
        .write-us{
            height: 250px;
            box-shadow: 0 15px 15px red;
            border: 1px solid red;
        }
        .sales-market{
            height: 250px;
            box-shadow: 0 15px 15px blue;
            border: 1px solid blue;
        }
        p{
            font-size: 15px;
        }
        button{
            padding: 8px 16px;
            font-size: 17px;
            border-radius: 25px;
            border: none;
            margin: 15px auto;
            cursor: pointer;
            color: rgb(255, 255, 255);
        }
        button:hover{
            color: gray;
        }
        #cust-care{
            background: green;

            box-shadow: 0 0 5px black;
        }
        #write{
            background: rgb(187, 15, 15);

            box-shadow: 0 0 5px black;
        }
        #sales{
            background: blue;
            box-shadow: 0 0 5px black;
        }
        a{
            font-size: 16px;
        }
        .customer-care a{
            color: green;
            text-shadow: 0 0 2px rgba(73, 129, 80, 0.637);
        }
        .sales-market a{
            color: blue;
            text-shadow: 0 0 2px rgba(76, 62, 158, 0.637);
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <hr>
        <h2>Have any questions? We'd love to hear from you</h2>
        <div class="contact-items">
            <div class="customer-care">
                <h3>Address</h3>
                <p>3rd floor, <br>Management Section, <br>KDU Hospital,<br> Werahara <br><br>Tel: 0710123456</p>
                
            </div>
            <div class="write-us">
                <h3>Write Us</h3>
                <p> You can write us if you have any queries</p>
                <a class="text-900" href="mailto:kduhospitaldb@gmail.com">kduhospitaldb@gmail.com </a></a>
          <!-- <a href="./contact-form.html"> <button id="write">Write</button></a>  u-->
            </div>
            
        </div>
    </div>
</body>
</html>