<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>H2C | Rapport des Conges</title>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <style>
            
            #customers {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            #customers td, #customers th {
              border: 1px solid #ddd;
              padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
            }

            .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            }
        </style>
   </head>
    <body> 

        <h1 style="text-align: center">  H2C | Development</h1>
                   <hr>
                <div style="text-align: right">
                    <p>Rapport No. <span>XXXX</span></p>
                </div>
        
        <h1 style="text-align: center; " >les Demandes des Congés</h1>
                
                <table id="customers">
                  <tr>
                    <td>ID</td>
                    <td>Employe </td>
                    <td>Date-Debut</td>
                    <td>Date-Fin</td>
                    <td>Type</td>
                    <td>Satatus</td>
                  </tr>
                  @foreach ($holdiay as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->start}}</td>
                    <td>{{$item->end}}</td>
                    <td>{{$item->type}}</td>
                    <td>
                        <?php 
                        if($item->status=="Accepté")
                        { echo '<span style="color: green" id="statuscol" >'.$item->status.'</span>';}
                        elseif ($item->status=="Refusé")
                        {echo '<span style="color: red;" id="statuscol"  >'.$item->status.'</span>';}
                        else
                        {echo '<span style="color: darkgoldenrod" id="statuscol" >'.$item->status.'</span>';}
                        ?>
                    </td>
                  </tr>
                  @endforeach

                </table>

                <!-- Note -->
                <div class="col-8">
                    <p class="m-0 font-weight-bold"> Noter: </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus, adipisci vero est dolore praesentium.</p>
                </div>

              
                <footer style="text-align: center"  class="footer">
                    <hr>
                    <p class="m-0 text-center">
                        <h3>| H2C Development |</h3>
                    </p>
                    <div class="social pt-3">
                        <span class="pr-2">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Tel: +00123456789 |</span>
                        </span>
                        <span class="pr-2">
                            <i class="fab fa-youtube"></i>
                            <span>Fax : +0083838742 |</span>
                        </span>
                        <span class="pr-2">
                            <i class="fas fa-envelope"></i>
                            <span>Email: H2C@Development.com |</span>
                        </span>
                        <span class="pr-2">
                            <i class="fab fa-facebook-f"></i>
                            <span>Adresse: xyz.xxx n*198 </span>
                        </span>
                        
                    </div>
                </footer>
            

    </body>
</html>