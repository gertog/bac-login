<?PHP




    
    if (isset($_SESSION['access'])||isset($_SESSION['active'])) {
        if ($_SESSION["access"]==="1"){
            echo '<iframe width="100%" height="95%" src="http://10.0.52.5:8100/tier/read.jsp"><iframe>';
        }
        
        if ($_SESSION["access"]==="2"){
            echo '<iframe width="100%" height="95%" src="http://10.0.52.5:8100/tier/write.jsp"><iframe>';
        }
        if ($_SESSION["access"]==="3"){
            echo '<iframe width="100%" height="95%" src="http://10.0.52.5:8100/tier/itunix.jsp"><iframe>';
        }
        
    }else{
        echo "You do not have access yet";
    }
    
    
    
?>