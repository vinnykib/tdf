<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
             <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                     Admin
                    </p>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-selected">
                            <a href="dashboard.php" class="pure-menu-link">Dashboard</a>
                        </li>
                        <li>
                            <a href="manageusers.php" class="pure-menu-link">Users</a>
                        </li>
                        <li>
                            <a href="manageposts.php" class="pure-menu-link">Posts</a>
                        </li>
                        <li>
                            <a href="managetopics.php" class="pure-menu-link">Topics</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Manage Posts <span class="pull-right"><a href="../signout.php">Logout</a></span></h1>
                </div>

                <?php
                require '../connect.php';                  

                    echo '<div class="pure-u-1 pure-u-md-2-3">';
                    echo '<div class="column-block">';   
                    echo '<table class="pure-table pure-table-horizontal">';                             
                    echo '<thead>';
                                
                                echo '<tr>';
                                                                 
                                    echo '<th>#</th>';

                                    echo '<th>Posts</th>';

                                    echo '<th>Date</th>';
                                    
                                    echo '<th>Action</th>';                                
                                    
                                echo '</tr>';
                                
                    echo '</thead>';

                    $i=1;

                    $query = mysqli_query($connection,"SELECT * FROM posts");
                    
                    while($row = mysqli_fetch_array($query)) {  
                                
                    echo '<tbody>';
                                
                                echo '<tr>'; 

                                    echo '<td>'.$i.'</td>';                                                             
                                   
                                    echo '<td>'.$row['posts_content'].'</td>';

                                    echo '<td>'.$row['posts_date'].'</td>';
                                    
                                    echo '<td><a href="deletepost.php?posts_id=' . $row['posts_id'] . '" style="color:red;">Delete</a></td>';
                                    
                                    echo '</tr>';
                                
                                echo '</tbody>';

                              $i++;
                            }
                           
                                
                                echo '</table>';
                            
                            echo '</div>';
                        
                        echo '</div>';
                    


                ?>

            </div>
        </div>
    </div>
</body>
</html>
