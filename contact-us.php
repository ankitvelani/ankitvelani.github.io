<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include './_Include/header.php';
    ?>
    <body>
        <div class="container-fluid">

            <div class="row">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="./">WePathIt <br> <small style="font-size: 9.5px;">Connecting...Transporting...Securing</small></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">


                            </ul>
                            <ul class="nav navbar-nav navbar-right">

                                <li class="list-group-item-heading "> <br>
                                    <img src="images/ab.png" alt="" class="img img-responsive" />
                                </li>




                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid home-vertical">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gap-70"></div>
                        <h2 class="page-header-custom">
                           Contact us
                        </h2>
 
                    </div>
                   
                </div>
            </div>


        </div>
          <div class="container">
           
            <div class="row">
             
                <div class="col-sm-6 text-left">
                    <br><br>
                    <p>Connect us by selecting your area of interest below, we will contact you shortly after receiving your request.</p>
                
                       
                <form class="form-horizontal">
                    <label>Name *</label>
                    <input type="text" class="form-control" name="name" required>
                    
                    <label>Mobile *</label>
                    <input type="text" class="form-control" name="mobile" required>
                    
                    <label>Email </label>
                    <input type="email" class="form-control" name="email" >
                      
                    <label>Query type </label>
                    <select class="form-control">
                        <option>Suggestion</option>
                        <option>Complain</option>
                        <option>Feedback</option>
                        <option>Media</option>
                        <option>Other</option>
                        
                    </select>
                    
                    <label>Description</label>
                    <textarea class="form-control" rows="4"></textarea>
                    <br>
                    <input type="submit" value="Get in touch" class="btn btn-success pull-right" style="    background-color: rgba(92, 184, 92, 0.81);">
                    
                </form>
            
                    <div class="gap-50"></div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <br><br>
                    <div class="well" style="background: transparent;">
                        <address>   
    Dept. Of MCA,
    <br>
    Siddaganga Institute of Technology
    <br>
    Tumkur,Karnataka-572103
<br>
<span style="font-family: 'times new roman';">P: +91 99866 38148 | E: info@wepathit.com </span>
                        </address>
                    </div>
                </div>
                </div>
            </div>
        </div>


        <?php
        include './_Include/footer.php';
        ?>
    </body>
</html>
