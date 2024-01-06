<?php include("../include/connection.php");?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style = "background-color: black" class="h-100">
<div id="all" class='container-fluid'>
    <header>
        <div class = 'bg-black' style="height: 100px ">
            <div class='title'>
                <h2>Admin Panel</h2>
            </div>
            <div class='menu float-end'>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../User/icon/profile_icon.png" class="rounded-circle" >
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class = 'all-content row border-top' style='background-color: #202926'>
        <div class='col-3 bg-secondary' style="height: 100vh; overflow-y: scroll" >
        <?php include("include/left_bar.php"); ?>
        </div>

        <div class='col-9 border-left h-100 overflow-y-scroll'>
            <main id='main_panel' class="text-white" style="height: 100vh; overflow-y: scroll overflow-hidden">
               <div class="header-title">
                <form action="" method = "POST">
                    <?php 
                        $select_query = "SELECT * FROM header WHERE header_Id = 1";
                        $select_res = mysqli_query($connection, $select_query);
                        
                        if($select_res){
                            $header= mysqli_fetch_assoc($select_res);
                            $header_title = $header['header_title'];
                            ?>
                            <label for="header_title"></label>
                            <input type="text" class="form-control mt-3 mb-3" value="<?php echo $header_title; ?>" name="header_title" id="header_title" placeholder = "Input your site name" required>
                            <?php
                        }

                        

                    ?>
                    
                    <button type="submit" name = "set_title" class = "btn btn-primary">Update</button>
                    
                </form>
               </div>

               <?php 
                if(isset($_POST['set_title'])){
                    $header_title = $_POST['header_title'];
                    $update_quey  = "UPDATE header SET header_title = '$header_title' WHERE header_id = 1 ";
                    $update_res = mysqli_query($connection, $update_quey);

                    if($update_res){
                        header("Location: header.php");
                    }
                }
               ?>
            </main>

        </div>
    </main>
</div>
</body>
</html>