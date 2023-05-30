<?php
  include "managerDashboard.php";
 

?>
<head>
    <title>List of Supplier Companies</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
      $(document).ready(function() {
            // Function to send AJAX request and update search results
            function updateSearchResults(searchTerm = '') {
                $.ajax({
                    type: "GET",
                    url: "../Controller/search.php",
                    data: { searchTerm: searchTerm },
                    success: function(result) {
                        $("#searchResults").html(result);
                    }
                });
            }
            updateSearchResults('');
            // Handle search input changes
            $("#searchTerm").on("input", function() {
                var searchTerm = $(this).val();
                updateSearchResults(searchTerm);
            });
        });
       
        function ConfirmDelete()
        {
          return confirm("Are you sure you want to delete?");
        }
   
    </script>
    <style>
         .table-container {
            height: 360px;
            overflow-y: scroll;
            border-bottom: 1px solid #ddd;
            border-left: 1px solid #ddd
        }

        table {
            border-collapse: collapse;
            width: 100%;
           
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        a:hover {
            background-color: #f5f5f5;
        }
        
    </style>
</head>
<body>
  <div class="container py-5 h-100" >
    <div class="row d-flex align-items-center justify-content-center h-100">
      <h4 style="font-size:35px;text-align: center;color:#145A32;margin-bottom:20px; ">Supplier Data</h4>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                  <nav class="navbar bg-light bg-gradient">
                    <div class="container-fluid"> 
                      <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="../Resources/img/magnifier.png" class="img-fluid" alt="Sample image" height="25px" width="25px"></span>
                        <input type="text" class="form-control"  type="text" name="searchTerm" id="searchTerm" placeholder="Enter search . . . . ." aria-describedby="addon-wrapping">
                        <a href="addSupplier.php" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">New</a>
                      </div>
                       
                    </div>
                  </nav>
                  <h3>List of Suppliers</h3>
                  <div class="table-container">
                  
                        <div id="searchResults"></div>
                      </table>
                  
                </div>
                </div>
                <div class="col-md-8"  >
              
                

