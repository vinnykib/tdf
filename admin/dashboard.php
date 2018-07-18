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

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Dashboard <span class="pull-right"><a href="../signout.php">Logout</a></span></h1>
                </div>

                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Users</h2>
                                <span class="column-block-info">21 <span>Total</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Posts</h2>
                                <span class="column-block-info">35 <span>Total</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header">
                                <h2>Topics</h2>
                                <span class="column-block-info">29 <span>Total</span></span>
                            </div>               
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
