   <style>
        ul.navbar-nav>li.nav-item.active {
        background-color: #e0d011;
    }
   </style>
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   
                    <li class="nav-item <?= $page_name=='data_list' ? 'active' : '' ?>">
                        <a class="nav-link" href="data_list.php">列表</a>
                    </li>

                    
                    <li class="nav-item <?= $page_name=='data_insert' ? 'active' : '' ?>">
                        <a class="nav-link"  href="data_insert.php" >註冊</a>
                    </li>

                    
                </ul>
                
            </div>
        </div>
    </nav>
