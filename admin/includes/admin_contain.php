<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                <?php
            //   use static function
            //     $result = user::find_all_users();
            //     while($row = mysqli_fetch_array($result)){
            //      $id = $row['id'];   
            //      $user = $row['user_name'];
            //      $pass = $row['pass'];
            //      $first_name = $row['first_name'];
            //  $last_name = $row['last_name'];
            //     }
                $found_user = user:: find_user_id(1);
                $user=new user();
                 echo $user->user_name=$found_user['user_name'];
                 echo"<br>";
                 echo $user->first_name=$found_user['first_name'];
                 echo"<br>";
                 echo $user->last_name=$found_user['last_name'];
        

              
                 ?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>