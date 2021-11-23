<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/main.css">   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- W3 schools -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="subject.js"></script>
  </head>
  <body>
    
      <!-- Navabar Implementation for large screens-->
      
    <nav style="background-color: #00223d;" class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand sty1" href="index.php">
            <img src="logo/Capture.PNG" alt="Logo" style="width:120px;">
        </a>
    </nav>
      <!-- Navbar ends -->
       
     <!-- Implementing the code for the panel--> 
      <div class="parallax w3-container">
          <div class="row h-25">
          </div>      
          <div class="row">
            <div class="col-2">
            </div>
            <div id="outerbox" style="background: rgba(20, 20, 20, 0.7);" class="col-8 w3-center">
                
            <div class="innerbox">
                    <div style="" class="w3-panel paneleffect">
                        
                    <!-- Container for Choose your state -->    
                        
                        <div class="container">
                <div class="fontbanner pt-1 pb-3" style="color: white; font-size: 40px; font-weight: 600;">Course By Course Equivalency</div>            
                <div class=" pt-4 frontformfont" style="font-weight: bold;">Choose Your State</div>
                <div class="pb-3 pt-1 frontformfont" style="font-size: 1em; font-weight: ;">{ Military Credits: District Of Columbia }</div>
                
                <div class="row mb-2">
                <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form action="">
                            <div class="form-group">
                                <select style="color:black; font-weight:400" class="form-control form-control-sm col-sm-12 selectstate selectchange" id="sel1" name="sellist1">
                                    <option>All States</option>
                                                 
                                    
                                     <option>Alabama</option>
                                                
                                    
                                     <option>Alaska</option>
                                                
                                    
                                     <option>American Samoa</option>
                                                
                                    
                                     <option>Arizona</option>
                                                
                                    
                                     <option>Arkansas</option>
                                                
                                    
                                     <option>California</option>
                                                
                                    
                                     <option>Colorado</option>
                                                
                                    
                                     <option>Connecticut</option>
                                                
                                    
                                     <option>Delaware</option>
                                                
                                    
                                     <option>District of Columbia</option>
                                                
                                    
                                     <option>Federated States Of Micronesia</option>
                                                
                                    
                                     <option>Florida</option>
                                                
                                    
                                     <option>Georgia</option>
                                                
                                    
                                     <option>Guam</option>
                                                
                                    
                                     <option>Hawaii</option>
                                                
                                    
                                     <option>Idaho</option>
                                                
                                    
                                     <option>Illinois</option>
                                                
                                    
                                     <option>Indiana</option>
                                                
                                    
                                     <option>Iowa</option>
                                                
                                    
                                     <option>Kansas</option>
                                                
                                    
                                     <option>Kentucky</option>
                                                
                                    
                                     <option>Louisiana</option>
                                                
                                    
                                     <option>Maine</option>
                                                
                                    
                                     <option>Maryland</option>
                                                
                                    
                                     <option>Massachusetts</option>
                                                
                                    
                                     <option>Michigan</option>
                                                
                                    
                                     <option>Military - Europe</option>
                                                
                                    
                                     <option>Minnesota</option>
                                                
                                    
                                     <option>Mississippi</option>
                                                
                                    
                                     <option>Missouri</option>
                                                
                                    
                                     <option>Montana</option>
                                                
                                    
                                     <option>Nebraska</option>
                                                
                                    
                                     <option>Nevada</option>
                                                
                                    
                                     <option>New Hampshire</option>
                                                
                                    
                                     <option>New Jersey</option>
                                                
                                    
                                     <option>New Mexico</option>
                                                
                                    
                                     <option>New York</option>
                                                
                                    
                                     <option>North Carolina</option>
                                                
                                    
                                     <option>North Dakota</option>
                                                
                                    
                                     <option>Northern Mariana Islands</option>
                                                
                                    
                                     <option>Ohio</option>
                                                
                                    
                                     <option>Oklahoma</option>
                                                
                                    
                                     <option>Oregon</option>
                                                
                                    
                                     <option>Palau</option>
                                                
                                    
                                     <option>Pennsylvania</option>
                                                
                                    
                                     <option>Puerto Rico</option>
                                                
                                    
                                     <option>Rhode Island</option>
                                                
                                    
                                     <option>South Carolina</option>
                                                
                                    
                                     <option>South Dakota</option>
                                                
                                    
                                     <option>Tennessee</option>
                                                
                                    
                                     <option>Texas</option>
                                                
                                    
                                     <option>Utah</option>
                                                
                                    
                                     <option>Vermont</option>
                                                
                                    
                                     <option>Virgin Islands</option>
                                      
                                    
                                    <option selected="selected">Virginia</option>
                                    
                                                
                                    
                                     <option>Washington</option>
                                                
                                    
                                     <option>West Virginia</option>
                                                
                                    
                                     <option>Wisconsin</option>
                                                
                                    
                                     <option>Wyoming</option>
                                        
                                    
                                    
                                </select>
                        <!--    <div class="mt-4">
                                <button type="button" id="nexthide" class="btn btn-primary btn-sm col-sm-4" >Next</button>
                            </div>  -->          
                            </div>
                        </form>
                    </div>
                 <div class="col-sm-3"></div>
                </div>
                               
                </div>
                <!-- Choose your state ends -->  
                        
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 backmrg">
                                  <!--  <div class="carousel-control-prev backbtn ">
                                        <span class="carousel-control-prev-icon"></span>
                                    </div> -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="required frontformfont pt-1" style="font-weight: bold; margin-bottom: -4px;" ><label>Search Your School Name</label></div><span style="color:red; display:none" class="validate_search"></span>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    
                        <!-- Form for School dropdown and Advanced search -->
                        
                        <form  class="mainform" action="courses.php" method="POST" autocomplete="off">
                        <div  class="container mt-3">
                        
                            <div  class="form-group">
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>  
                                    
                                <!-- Div for School Search dropdown -->    
                                <div  class="col-sm-6 input-group mb-3 breakw">
                                      
                                   
                                    <input class="hideinput" style="display:none" name="school_state" />
                                    <input class="hideinput1" style="display:none" name="state_state" />
                                    <input class="hideinput2" style="display:none" name="sbgi_value" />
                                    
                                         <button id="subbtn" type="button"  value="School Name" class="btn btn-light btn-sm col-sm-12 schoolclick marg">
                                                    <span class="buttontext" style="float:left">School  Name</span>
                                                    <span style="float:right; font-size: 0.7em; margin-right: -3px; padding-top: 2px;">&#9660;</span>     
                                         </button>
                                        
                                                    <div style="clear: both;"></div>
                                    <div class="schoolhide container" style="background-color: white; margin-top:0.6px; display:none">
                                       <div class="row p-2"> 
                                            <input id="" style="background: rgba(255, 255, 255, 1); color: rgba(0, 0, 0, 1); font-weight: bold" type="text" class="form-control form-control-sm col-sm-12 mb-2 schoolfiltersearch " placeholder="Search School.."><!--<span class="rounded-circle fun marg"></span>-->
                                            

                                                 <div class="col-sm-12" style="height:110px; overflow: auto; background-color: white; border: 1px solid #DCDCDC; font-size: 0.8em;">
                                                    

                                                        <ul class="float-left schoolnamedropdown" style="list-style-type:none; margin-left: -30px">
                                                    
                                               
                                          <li class="row pt-2 lihover">All Virginia Cmty Col System</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">American Military University  </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">American Public Univ System   </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Art Institute Virginia Beach  </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Art Institute Washington      </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Averett University            </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Bluefield College             </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Bridgewater College           </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Bryant & Stratton C Richmond  </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Bryant & Stratton C Va Beach  </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Bryant Stratton Coll Hampton</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Chamberlain Univ Virginia</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Christendom College           </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Christopher Newport University</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Coll William And Mary         </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">College Level Exam Program</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Commonwealth College</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Dantes Subject Stndr Tests</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Defense Act Non-Trad Educ Supp</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Devry Univ Va                 </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Domestic Inst Conversion Isis</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Eastern Mennonite University  </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Eastern Va Medical School</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Ecpi - Richmond</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Ecpi University</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Emory & Henry College         </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Ferrum College                </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">George Mason University       </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Hampden-Sydney College        </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Hampton University            </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Hollins University            </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">James Madison University      </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Jefferson College Of Hlth Sci </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Johnson Wales Univ Va</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Liberty University            </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Longwood University           </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Lynchburg College             </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Mary Baldwin College          </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Marymount University          </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Norfolk State University      </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Radford University            </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Randolph College              </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Randolph-Macon College        </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Regent University             </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Richard Bland College         </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Roanoke College               </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Shenandoah University         </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">South University</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Southrn Virginia University   </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Southwst Virginia Cmty College</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">St Pauls College Va           </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Sweet Briar College           </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Univ Richmond                 </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Univ Virginia                 </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">University Of Mary Washington </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Uva- Wise                     </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Commonwealth Univ    </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Intermont College    </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Military Institute   </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Polytech Inst St U   </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia State University     </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Union University     </li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Virginia Wesleyan University</li>  

                                                    
                                               
                                          <li class="row pt-2 lihover">Washington Lee University     </li>  

                                                        </ul>  

                                                     

                                        </div> 
                                        
                                    </div>

                                     </div>     
                                                                
                                </div>
                                    
                                <!-- School dropdown ends -->    
                                    
                                 <!-- Search Button -->   
                                <div class="col-sm-3 resizesr">
                                    <div class="input-group-btn" >
                                    <button  class="btn btn-primary btn-sm srchbtn col-sm-12" name="landing_submit" type="button">Search</button>
                                </div>
                                  </div>
                                    
                                <!-- Search Button ends -->     
                                </div>
                                
                                <!-- Div for Advanced Search toggle button-->  
                                
                                 <div class="advs float-right pt-4">
                                    Advanced Search
                                 </div>
                                
                                <div class="clearfix">
                                </div> 
                                
                                <!-- Div ends -->
                                
                           </div>                                         
                        
                            </div>
                            
                    <!-- Div for Advanced search -->        
                    <div class="container-fluid adddhide">
                                    
                            <div class="row mb-3 form-group mt-5">
                             
                                 <div class="col-sm-1"></div>
                                
                            <!-- Div for Subject Select -->    
                                <div class="col-sm-4 mb-3">

                                 <button type="button" class="btn btn-light  btn-sm col-sm-12 subjectclick">
                                <span style="float:left">Subject</span>
                                <span style="float:right">&#8744;</span>     
                                            </button>
                                <div style="clear: both;"></div>
                                    <div class="subjecthide">
                                <div style="margin-top: 1px;"> 
                                    <input id="subjectfield" style="background: rgba(255, 255, 255, 1); color: rgba(0, 0, 0, 1);" type="text" class="form-control form-control-sm search_subj" placeholder="Search Name.." autocomplete="off"><!--<span class="rounded-circle fun marg"></span>-->
                                    </div>

                                         <div style="height:70px; overflow: auto; background-color: white; border: 1px solid #DCDCDC; font-size: 0.8em;">
                                             
                                            <div id="loader_adv"></div>
                                             
                                <div class="w3-container subjnamedropdown" style="display: none;">



                                </div>  

                            </div> 

                                </div>     

                                </div>
                            <!-- Div for subject select ends-->    
                                

                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 ">


                                <button type="button" class="btn btn-light  btn-sm col-sm-12 courseclick" >
                                    <span style="float:left">Course</span>
                                    <span style="float:right">&#8744;</span>     
                                </button>
                                <div style="clear: both;"></div>
                                   <div class="coursehide">  
                                <div style="margin-top: 1px;"> 
                                    <input id="coursefield" style="background: rgba(255, 255, 255, 1); color: rgba(0, 0, 0, 1);" type="text" class="form-control form-control-sm subjsearch" placeholder="Search Number.." autocomplete="off"><!--<span class="rounded-circle fun marg"></span>-->
                                 </div>

                                         <div class="" style="height:70px; overflow: auto; background-color: white; border: 1px solid #DCDCDC; font-size: 0.8em;">
                                             
                                    <div id="loader_adv1"></div>
                                             
                                <div class="w3-container subjdropdown" style="display: none;">



                                    </div>  

                                    </div> 

                                    </div>        
                                </div>
                                 <div class="col-sm-1"></div>
                             </div>
                   
                    
                    </div>
                             </form>
                    </div>
                </div>   
            </div>
            <div class="col-2">
            </div>    
        </div>    
      </div>      
     
     
            
  </body>
   
</html>