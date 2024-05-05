<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetUpSprint</title>
</head>
<body>
    <nav>
        <div>
          
          <img src="../assets/images/SetUpSprint.svg" class="logo"></img>
        </div>
        <div style="flex-basis: auto;">
          <form class="search-form">
            
            <input  type="text" class="search-input" placeholder="Search...">
            <button type="submit" class="submit-btn">Submit</button>
          </form>
        </div>
      </nav>
      
      <div class="mpage">
        <div class="lfttable" >
            <div class="tablrow">
                <div class="tablecol"> <img src="../assets/images/dashboard.png" >      </div>
                <div class="tablecol"> <a href="./adminDashboard.php"> Dashboard </a>   </div>
            </div>
          <div class="tablrow">
            <div class="tablecol"> <img src="../assets/images/costumers.png" >      </div>
            <div class="tablecol"> <a href="admindashbord.html">Costumers   </a>   </div>
          </div>
          <div class="tablrow">
            <div class="tablecol"> <img src="../assets/images/orders.png" >      </div>
            <div class="tablecol"><a href="./adminOrders.php"> Orders  </a>    </div>
          </div>
          <div class="tablrow">
            <div class="tablecol"> <img src="../assets/images/products.png" >      </div>
            <div class="tablecol"> <a href="productDetailPage.php">Products   </a>   </div>
          </div>
        </div>

        <div class="rgtcontent2">
            <div class ="ttbl4">

                <h3>Latest Orders</h3>
                <table class="tbl4">
                    <tr>
                        <th>Order </th>
                        <th>Order ID</th>
                        <th>Date&Time</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>STATUT</th>
                    </tr>
                    <tr>
                        <td>Payment from Bonnie Green</td>
                        <td>1005</td>
                        <td>feb 13,2024</td>
                        <td>$1700</td>
                        <td>1</td>
                        <td >
                          <div class="stat">
                            delivred
                          </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
            </div>
                
        </div>
    </div>
</body>
</html>
