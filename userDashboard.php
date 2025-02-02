<?php session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['do']=="logout"){
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>user dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                height: 100vh;
                background-color: #f5d5d5;
                flex-direction: column;
                font-size: 3vh;
            }
            a{
                color:black;
            }
            .header{
                display: flex;
                height: 100px;
                background-color: #A87676;
                align-items: center;
                padding-left: 30px;
                padding-right: 30px;
                justify-content: space-between;
            }
            .header button, 
            .searchBar button{
                display: flex;
                height: 100px;
                background-color: #a8767600;
                align-items: center;
                padding-left: 30px;
                border: 0;
                cursor: pointer;
            }
            .header img, 
            .searchBar img{
                object-fit: cover; 
                object-position: center; 
                height: 6vh;
            }
            .searchBar{
                display: flex;
                width: 100%;
                height: 70px;
                justify-content: center;
                align-items: center;
                margin: 0;
                padding: 0;
            }
            .searchBar form{
                display: flex;
                margin-left: 20px;
                width: 500px;
            }
            .searchBar form .search{
                width: 100%;
                height: 50px;
                border: none;
                border-radius: 10px 0 0 10px;
                padding-left: 10px;
                font-size: 20px;
            }
            .searchBar form .search:focus {
                outline: none; 
                box-shadow: none; 
            }
            .searchIcon{
                display: flex;
                height: 52px; 
                background-color: rgb(255, 255, 255); 
                border-radius: 0px 10px 10px 0px;
                padding-right: 7px;
                align-items: center;
            }
            .searchIcon button{
                background-color: rgb(255, 255, 255);
                border: none;
                height: 100%;
                width: 100%;
                cursor: pointer;
            }
            .searchIcon button:hover, 
            .searchIcon:hover{
                background-color: rgb(168, 168, 168);
            }
            .container2{
                display: flex;
                width: 100%;
                flex-direction: column;
            }
            .container3{
                display: flex;
                height: 100%;
                padding-top: 50px;
                flex-direction: column;
                align-items: center;
            }
            .categoryBox{
                background-color: rgb(255, 255, 255);
                display: flex;
                height: 18vh;
                width: 60vw;
                border-radius: 15px;
                margin: 0;
            }
            .imageBox{
                background-color: rgb(129, 253, 116);
                display: flex;
                width: 50%;
                border-radius: 15px;
                margin-right: 20px;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 40px;
            }
            .grid-item {
                background-color: white;
                border-radius: 10px;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: flex;
                width: 300px;
                height: 300px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .grid-item img{
                object-fit: cover; 
                object-position: center; 
                height: 25vh;
                width: 12vw;
                border-radius: 10px;
            }
            .container4{
                position: absolute;
                height: 300px;
                width: 300px;
                justify-items: center;
                align-content: flex-end;
                
            }
            .container4 p{
                background-color: #ffd0d0d9;
                width: 180px;
                border-radius: 15px;
                border: solid 1px black;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <!-- <button><img src=""></button> -->
    <body>
        <div class="header">
            <button onclick="logout()" style="font-size:2.5vh;">LOGOUT</button>
            <button onclick="location.href='profilePage.php'"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"></button>
        </div>
        
        <div class="container2">
            <div class="searchBar">
                <p>Search</p>
                <form id="" action="" method="" class="">
                    <input type="text" name="search" class="search">
                </form>
                <div class="searchIcon">
                    <button><img src="https://cdn-icons-png.flaticon.com/512/711/711319.png"
                    style="height: 2vh;
                    object-fit: cover;
                    object-position: center;"></button>
                </div>
                <button onclick="location.href='transactionPage.php'"><img style="margin-left: 10px;" src="https://cdn-icons-png.flaticon.com/512/7327/7327006.png"></button>
                <button onclick="location.href='favoritePage.php?category=Drinks&prod_id=1&display=none'"><img style="margin-left: 10px;" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png"></button>
            </div>
            <div class="container3">
                <div class="grid">
                    <a href="productsUserPreview.php?category=Drinks&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/0Zrv4M6/Beverage-Photographer-Iced-Coffee-Terragold-Photo.jpg" alt="Drinks">
                        <div class="container4">
                            <p>DRINKS</p>
                        </div>
                    </div></a>
                    <a href="productsUserPreview.php?category=Sushi&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/3d3086c/AI-created-content-for-sushi-restaurant-and-delivery-sushi.jpg" alt="Sushi">
                        <div class="container4">
                            <p>SHUSHI</p>
                        </div>
                    </div></a>
                    <a href="productsUserPreview.php?category=Pizza&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/4TZ3QR0/Cheesy-BBQ-Chicken-Pizza.jpg" alt="Pizza">
                        <div class="container4">
                            <p>PIZZA</p>
                        </div>
                    </div></a>
                    <a href="productsUserPreview.php?category=Burger&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/rdvHBkV/Amazing-Burger.jpg" alt="Burger">
                        <div class="container4">
                            <p>BURGER</p>
                        </div>
                    </div></a>
                    <a href="productsUserPreview.php?category=Pastry&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/Yf92nQG/Espresso-Chocolate-Fudge-Cookies-33-Minutes.jpg" alt="Pastry">
                        <div class="container4">
                            <p>PASTRY</p>
                        </div>
                    </div></a>
                    <a href="productsUserPreview.php?category=Pasta&prod_id=1&display=none"><div class="grid-item">
                        <img src="https://i.ibb.co/mq3FM2d/Tagliatelle-Puy-Lentil-Ragu-Cupful-of-Kale-Recipes.jpg" alt="Pasta">
                        <div class="container4">
                            <p>PASTA</p>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <script>
            function logout(){
                let a=confirm("Are you sure you want to logout?");
                if(a){
                    // Create a form element
                    var form = document.createElement("form");
                    form.method = "POST";
                    form.action = "userDashboard.php";
                    //FOR VALIDATION
                    var inputTotal = document.createElement("input");
                    inputTotal.type = "hidden";
                    inputTotal.name = "do";
                    inputTotal.value = "logout";
                    form.appendChild(inputTotal);

                    // Append the form to the body
                    document.body.appendChild(form);

                    // Submit the form
                    form.submit();
                }
            }
        </script>
    </body>
</html>