

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
            <aside id='left_bar'>
                <div class = 'navbar'>
                    <ul class='navbar-nav'>
                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>
                        </li>
                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Page
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>
                        </li>
                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Post
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>    
                        </li>
                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Users
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>    
                        </li>
                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Permission
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>    
                        </li>

                        <li class ='nav-item '>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Layout
                                </a>
            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Menu</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Menu</a></li>
                                    
            
                                </ul>
                            </div>    
                        </li>
                    </ul>
                </div>
            </aside>

        </div>

        <div class='col-9 border-left h-100 overflow-y-scroll'>
            <main id='main_panel' class="text-white" style="height: 100vh; overflow-y: scroll overflow-hidden">
                <div class="container-fluid m-5 ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO: </th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $all_category_query = "$SELECT * FROM categories WHERE cat_status != 'trash'";
                        $all_category_res = mysqli_query($connection, $all_category_query);
                        if(mysqli_num_rows($all_category_res) > 0){
                            $n_o_c = 0;
                            while($category = mysqli_fetch_assoc($all_category_res)){
                                $n_o_c = $n_o_c + 1;
                                $cat_id = $category['cat_id'];
                                $cat_name = $category['cat_title'];
                                $cat_p_id = $category['cat_p_id'];
                                $position_query = "SELECT * FROM categories WHERE cat_p_id = $cat_id";
                                $position_res = mysqli_query($connection, $position_query);
                                $position_component = mysqli_fetch_assoc($position_res);
                                $position = $position_component['cat_title'];
                                $cat_status = $category['cat_status'];
                                ?>
                                <tr>
                                <th scope="row"><?php echo $n_o_c; ?></th>
                                <td><?php echo $cat_name ?></td>
                                <td><?php echo $position ?></td>
                                
                                <td><?php echo $cat_status; ?></td>
                                <td><a href="edit_menu.php?cat_id=<?php echo $cat_id;?>" class="text-decoration-none text-warning">Edit</a></td>
                                <td><a href="edit_menu.php?cat_id=<?php echo $cat_id;?>" class="text-decoration-none text-danger" href="#">Delete</a></td>
                            </tr>
                                <?php
                            }
                        }
                            ?>
                            

                        <?php 
                    ?>
                    
                        
                        

                    </tbody>
                </table>
                </div>
            </main>

        </div>
    </main>
</div>
</body>
</html>