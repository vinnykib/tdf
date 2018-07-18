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

    <script type="text/javascript">
function deletes(id)
{
    a=confirm('Are You Sure To Remove This Record ?')
     if(a)
     {
        window.location.href='delete_farmer.php?id='+id;
     }
}
</script>

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
                    <h1 class="subhead">Manage Topics <span class="pull-right"><a href="../signout.php">Logout</a></span></h1>
                </div>

               <?php
                require '../connect.php';
                                   

                    echo '<div class="pure-u-1 pure-u-md-2-3">';
                    echo '<div class="column-block">';   
                    echo '<table class="pure-table pure-table-horizontal">';                             
                    echo '<thead>';
                                
                                echo '<tr>';

                                    echo '<th>#</th>';
                                                                 
                                    echo '<th>Topic</th>';

                                    echo '<th>Description</th>';
                                    
                                    echo '<th>Action</th>';                                
                                    
                                echo '</tr>';
                                
                    echo '</thead>';

                    $i=1;

                    $query = mysqli_query($connection,"SELECT * FROM topics");
                    while($row = mysqli_fetch_array($query)) { 
                                
                    echo '<tbody>';
                                
                                echo '<tr>';                                                              
                                   
                                    echo '<td>'.$i.'</td>';

                                    echo '<td>'.$row['topic_subject'].'</td>';

                                    echo '<td>'.$row['topic_descr'].'</td>';
                                    
                                    echo '<td><a href="deletetop.php?topic_id='.$row['topic_id'].'" style="color:red;">Delete</a></td>';
                                    
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
