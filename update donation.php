<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CII Project</title>
   
</head>
<body>

  <br><h3  class = "donate" >Please Donate to Our Cause!<br></h3>
    <div class="container">
        <div class="donation-grid">
            <!-- Food Donation Section -->
            <div class="donation-images">
                <h2>Food Donation</h2>

                <img src="https://img.freepik.com/premium-photo/female-volunteer-giving-out-donation-food-day_23-2148637937.jpg?w=360">

                    <a href="FoodST.php" class="submit-btn">Donate Food</a>
                    
                </form>
            </div>


            <!-- Money Donation Section -->
            <div class="donation-images">
                <h2>Money Donation</h2>
                
                <img src="./donopics/money.png">
                
                <a href="MoneyST.php" class="submit-btn">Donate Money</a>
            </form>
        </div>
            
            <!-- Clothes Donation Section -->
            <div class="donation-images">
                <h2>Clothes Donation</h2>
                
                <img src="./donopics/clothes.jpg">

                    <a href="ClothesST.php" class="submit-btn">Donate Clothes</a>
                    
                </form>
            </div>
        </div>
    </div>
</body>  
    <div class = "blurb">
        <P>By joining our cause, you help build a more inclusive and compassionate world.
             Together, we can make a difference—one donation at a time.Your kindness can change lives.
              Donate today!</P>
    </div>
</body>
</html>

<style>
   
/*=================================== Headers ===================================*/

.h3 {
    text-align: center;
    font-family: Aptos;
    margin: 80px;
}



.donate {
    text-align: center;
    justify-content: center;
    font-size: 70px;
}

.btns {
    justify-content: center;
    float: center;
    display: flex;
    margin-left: 30px;
}

.welcome {
    justify-content: center;
    float: center;
    display: flex;
    font-size: 35px;
}

.btn {
    justify-content: center;
    float: center;
    display: flex;
}

.btn a {
    display: flex;
    padding: 0.3em 1.25em;
    border: 4px solid #000000;
    font-family: Aptos;
    font-size: 20px;
    line-height: 40px;
    text-decoration: none;
    color: #000000;
    margin-left: 15px;
    cursor: pointer;
    background: #ffffff;
    transition: color,border-color ease 0.6s;
    opacity: 0.5;
    transition: 0.3s;
}

.btn a:hover {
    border-color: #000000;
    color: #3d4247;
    text-decoration: none;
    transform: translateY(3px);
    opacity: 1;
}

.desc {
    text-align: center;
    justify-content: center;
    display: flex;
    font-size: 30px;
    margin-left: 150px;
    margin-right: 150px;
    margin-top: 400px;
}

.blurb {
    justify-content: center;
    float: center;
    display: block;
    text-align: center;
    margin-top:20px;
    font-size: 28px;
    margin-left:100px;
    margin-right:100px;
}

/*=================================== Headers ===================================*/

/*=================================== Containers ===================================*/

:root {
            --primary-color:#D6AA9F ;
            --secondary-color: #F4E2D1;
            --text-color: #423736;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: var(--text-color);
        }

        .navbar {
            background-color: var(--secondary-color);
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-size: 1.4rem;
            color: var(--text-color);
        }

        .nav-link {
            color: var(--text-color);
            margin: 0.1rem;
            transition: opacity 0.1s;
        }

        .nav-link:hover {
            opacity: 1.10;
        }

        .hero-section {
            background-color: var(--primary-color);
            padding: 8rem 2rem;
            text-align: center;
            position: relative;
        }

        .hero-title {
            font-size: 3.6rem;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }


        * {
            margin: 2px;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color:#AAB7B7;
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 40px;
        }

        .header {
            text-align: center;
            padding: 60px 0;
            background-color: black;
            margin-bottom: 30px;
            box-shadow: #1A2D42;
        }

        .header h1 {
            font-size: 4.5em;
            color: black;
            margin-bottom: 10px;
        }

        .donation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            padding: 20px;
        }

        .donation-card {
            background: #D6AA9F;
            padding: 30px;
            border-radius: 10px;
            box-shadow: #2E4156;
            text-align: center;
            font-size: 15px;
        }

        .donation-image {
            background: #D6AA9F;
            padding: 30px;
            margin-right: 20px;
            border-radius: 10px;
            box-shadow: #2E4156;
            text-align: center;
            font-size: 15px;
        }

        .donation-image img {
            width: 250px;
            margin-bottom: 20px;
        }

        .donation-images {
            background: #D6AA9F;
            padding: 30px;
            margin-right: 20px;
            border-radius: 10px;
            box-shadow: #2E4156;
            text-align: center;
            font-size: 15px;
        }


        .donation-images img {
            width: 250px;
            margin-bottom: 20px;
        }

       

        .donation-card h2 {
            color: #333;
            margin-bottom: 15px;
        }

        
        .donation-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        } 

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .submit-btn {
            background-color: #2E4156;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #987185;
        }
    </style>

