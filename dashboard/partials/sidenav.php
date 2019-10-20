
<div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header" style="  margin-bottom: 1%;">
   			<h3><img src="icon.png" style="margin-right: 13px; width: 40%;">Mohamed</h3>
   		</div>
   		
   		<ul class="list-unstyled components">
   			<li class="active">
   				<a href="#homeSubmenu" style="text-decoration: none;" ><i class="fas fa-home"></i> Home</a>
   				 
   			</li>
        <li>
          <a style="text-decoration: none;" href="#"><i class="fas fa-shopping-cart"></i> STOCK</a>
           
        </li>
   			
   			<li>
   				<a style="text-decoration: none;" href="#"><i class="fas fa-balance-scale"></i> SALES</a>
   			</li>
   			
   			<li>
   				<a href="#" style="text-decoration: none;"><i class="fas fa-calculator"></i> NET AMOUNT</a>
   			</li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none;">
            <i class="fas fa-edit"></i> ANALYSIS</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="#" style="text-decoration: none;"><i class="fas fa-dot-circle"></i> Graph</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none;"><i class="fas fa-dot-circle"></i> Statistics</a>
            </li>
           
          </ul> 
        </li>
   			
   		</ul>
   		
      <ul class="list-unstyled CTAs">
        <li>
          <a href="#" class="download" style="text-decoration: none;">LOG OUT</a>
        </li>
        
      </ul>
   		
   	</nav>
   
   	
   	
   
   	
   	
   	
   </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
