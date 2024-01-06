

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
<div id="all" class='container-fluid overflow-x-hidden'>
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

        <div class='col-9 border-left h-100 overflow-y-scroll overflow-x-hidden'>
            <main id='main_panel' class="text-white" style="height: 100vh;">
                <div class="container-fluid p-5 ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-white" scope="col">NO: </th>
                            <th class="text-white" scope="col">Name</th>
                            <th class="text-white" scope="col">Position</th>
                            <th class="text-white" scope="col">Status</th>
                            <th class="text-white" scope="col">Edit</th>
                            <th class="text-white" scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $all_category_query = "SELECT * FROM categories WHERE cat_status = 'trash'";
                        $all_category_res = mysqli_query($connection, $all_category_query);
                        if(mysqli_num_rows($all_category_res) > 0){
                            $n_o_c = 0;
                            while($category = mysqli_fetch_assoc($all_category_res)){
                                $n_o_c = $n_o_c + 1;
                                $cat_id = $category['cat_id'];
                                $cat_name = $category['cat_title'];
                                $cat_p_id = $category['cat_p_id'];
                                if($cat_p_id > 0){
                                    $position_query = "SELECT * FROM categories WHERE cat_id = $cat_p_id";
                                    $position_res = mysqli_query($connection, $position_query);
                                    $position_component = mysqli_fetch_assoc($position_res);
                                    $position = $position_component['cat_title'];
                                }else{
                                    $position = 'Top';
                                }
                                
                                $cat_status = $category['cat_status'];
                                ?>
                                <tr>
                                <th class="text-white" scope="row"><?php echo $n_o_c; ?></th>
                                <td class="text-white"><?php echo $cat_name ?></td>
                                <td class="text-white"><?php echo $position ?></td>
                                
                                <td class="text-white"><?php echo $cat_status; ?></td>
                                <td><a href="edit_menu.php?cat_id=<?php echo $cat_id;?>" class="text-decoration-none text-warning">Edit</a></td>
                                <td><a href="menus.php?delete_id=<?php echo $cat_id;?>" class="text-decoration-none text-danger" href="#">Remove</a></td>
                            </tr>
                                <?php
                            }
                        }
                            ?>
                            

                       
                    
                        
                        

                    </tbody>
                </table>
                </div>
            </main>
                    <?php 
                    if(isset($_GET['delete_id'])){
                        $cat_id = $_GET['delete_id'];
                        $delete_query = "UPDATE categories SET  cat_status = 'trash' WHERE cat_id = $cat_id ";
                        $delete_menu_res = mysqli_query($connection, $delete_query);
                        if($delete_menu_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Menu Delete Successfully</p>
                                    </div>
                            <?php
                            

                        }else{
                            ?>
                                <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Deleted Problem</strong>
                                        <p class=" text-white ">Some how it not deleted please try again..</p>
                                    </div>
                            <?php
                        }
                        
                    }
                    ?>
        </div>
    </main>
</div>
</body>
</html>