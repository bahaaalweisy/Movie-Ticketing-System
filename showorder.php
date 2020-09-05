<?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');
  ?>

  <!DOCTYPE html>
  <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">

  <title>Online Movie Tickets Management System</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="./movie_files/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
     <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  
  
    </head>
  
 <body>
  
 <div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li>
							<?php include 'header.php'; ?>
						</li>			
					</ul>
				</div>
			</div>
		</div>
		
    <div  class="container">
    <form action="" method="post" role="form">
   
    
      <table id="fresh-table" class="table" width="100%">
        <thead>
          <th data-field="ID" data-sortable="true">Order ID</th>
          <th data-field="date">Date</th>
           <th data-field="time">Time</th>
            <th data-field="theater">Theater</th>
             <th data-field="movie">Movie</th>
             
                <th data-field="user">Email</th>
                  
                   
        </thead>
        <tbody>

          <?php 

          
        
          
          
          $movieRes=$conn->query("select * from showorder;");
          while ($movieRow=$movieRes->fetch_object()) {

            ?>
         
          
            <tr>
             
            
                  <td 
                    style="font-weight: bold;"><?php echo "".$movieRow->showOrderId;?>
                  </td>
            
                  <td ><?php echo "".$movieRow->date;?>
                  </td>
               
                  <td   >
                  <?php echo " <span class='label label-primary'>".$movieRow->timeslot."</span>";?>
                  </td>
              
                 <td 
                 style="font-weight: bold;"><?php echo "".$movieRow->theater;?>

                 </td>
              
                 <td 
                 style="font-weight: bold;"><?php echo "".$movieRow->movieName;?>

                 </td>
              
                 
                  
                 <td 
                 style="font-weight: bold;"><?php echo "".$movieRow->user;?>

                 </td>
                 
               
             
               
               
               
           
            </tr>
             
            <?php  } ?>
          </tbody>


        </table>
         </form>
          
          
           <center><div class="wrapper">
				<button class="btn btn-default" onclick="document.location.href='adminpage.php'" > <span class='glyphicon glyphicon-chevron-left'> </span>BACK TO THE ADMIN PAGE</button>
			</div>
            </center>

</section>
          
      </div>
    </div>
  </div>
</div>

</div>






   
    <script>
      $( document ).ready(function() {
        $('.datepicker').datepicker({
          weekStart:1,
          color: 'red'
        });
      });

      // table showtime
      var $table = $('#fresh-table'),
      $alertBtn = $('#alertBtn'), 
      full_screen = false,
      window_height;

      $().ready(function(){

        window_height = $(window).height();
        table_height = window_height - 20;


        $table.bootstrapTable({
          toolbar: ".toolbar",

          showRefresh: true,
          search: false,
          showToggle: true,
          showColumns: true,
          pagination: true,
          striped: true,
          sortable: true,
          height: table_height,
          pageSize: 25,
          pageList: [25,50,100],
          
          formatShowingRows: function(pageFrom, pageTo, totalRows){
              //do nothing here, we don't want to show the text "showing x of y from..." 
            },
            formatRecordsPerPage: function(pageNumber){
              return pageNumber + " rows visible";
            },
            icons: {
              refresh: 'fa fa-refresh',
              toggle: 'fa fa-th-list',
              columns: 'fa fa-columns',
              detailOpen: 'fa fa-plus-circle',
              detailClose: 'fa fa-minus-circle'
            }
          });

        window.operateEvents = {
          'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
          },
          'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);    
          },
          'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
              field: 'id',
              values: [row.id]
            });

          }
        };

        $alertBtn.click(function () {
          alert("You pressed on Alert");
        });


        $(window).resize(function () {
          $table.bootstrapTable('resetView');
        });    
      });


      function operateFormatter(value, row, index) {
        return [
        '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
        '</a>',
        '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
        '</a>',
        '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
        '</a>'
        ].join('');
      }
    </script>
  



 <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>







  <!-- FOOTER -->




  
</body>
  