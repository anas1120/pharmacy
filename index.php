<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pharmacy</title>
</head>

<body>
    <header>
        <a href="/">
            <img src="./img/images.jpg" alt="pharmacy" class="logo" />
        </a>
        <nav>
            <ul>
                <li> <a href="index.php">Home</a> </li>
                <li><a href="login.php">login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- First row -->
        <section class="heroSection">
            <article>
                <h1>Welcome to Our pharmacy</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </article>
            <img src="./img/download.jpg" alt="" />
        </section>

        <!-- second row  -->
        <section class="secondRow">
            <!-- column 1 -->
           <article>
                <h2>Question doctor</h2>
        
               <form action="process/get_ask.php" method="get">
                <input name="name" type="name" placeholder="name">
                </br>
                <input name="phoneNumber" type="phoneNumber" placeholder="phoneNumber">
            </br>
            <textarea name="Question" id="" cols="30" rows="10"></textarea></br>
                <input type="submit">
               </form>
            </article>   
          
            <!-- column 2 -->
            <article>
                <h2>Branch</h2>
                <form action="process/branch.php" method="post">
            <select name="list">   
            <option value="1">Amman</option>
            <option value="2">Irbid</option>
            <option value="3">Aqaba</option>
            <option value="4">Zarqa</option>
            <option value="5">Al Karak</option>
            <option value="6">Ma'an</option>
          </select>
          <input type="submit">
        </form>
               
            </article>
            <!-- column 3 -->
            <article>
                <div class="container">
                    <h1>BMI Calculator</h1>
              
                    <!-- Option for providing height 
                        and weight to the user-->
                    <p>Height (in cm)</p>
              
                    <input type="text" id="height">
              
                    <p>Weight (in kg)</p>
              
                    <input type="text" id="weight">
                    </br>
              
                    <button id="btn">Calculate</button>
              
                    <div id="result"></div>
                </div>
                <script src="app.js"></script>
            </article>
        </section>
    </main>
    <hr />
    <footer>

        <p> &copy Copy right pharmacy</p>
    </footer>
</body>

</html>