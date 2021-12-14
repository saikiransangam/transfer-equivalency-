 $records = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU, listagg(CONCAT(CONCAT(CONCAT(CONCAT(SUBJ_CODE_INST_ODU, ' '), CRSE_NUMB_INST_ODU), '<BR>'), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR> ', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP(ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENT, listagg(CONCAT(CONCAT(INST_TITLE_ODU,'<BR> '), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR>', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP( ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENTCOURSE
                                      FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."'";
                                      }
                                      
                                      if(isset($_POST['select_subject'])){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '".$_POST['select_subject']."' ";
                                      }

                                      if(isset($_POST['select_course'])){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '".$_POST['select_course']."' ";
                                      }
                                      //$records = $records."decode(CONNECTOR_COL_ODU,'NULL', '')";
                                      $records = $records."GROUP BY SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU ORDER BY SUBJ_CODE_FROM_SCHOOL ASC, CRSE_NUMB_FROM_SCHOOL"; 
                                      $result = oci_parse($conn, $records);




 $records = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU, listagg(CONCAT(CONCAT(CONCAT(CONCAT(SUBJ_CODE_INST_ODU, ' '), CRSE_NUMB_INST_ODU), '<BR>'), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR> ', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP(ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENT, listagg(CONCAT(CONCAT(INST_TITLE_ODU,'<BR> '), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR>', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP( ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENTCOURSE
,LISTAGG(SUBJ_CODE_INST_ODU || ' ' || CRSE_NUMB_INST_ODU, ' , ') AS test
,LISTAGG(DECODE(CONNECTOR_COL_ODU, 'NULL',' ', CONNECTOR_COL_ODU)) as test_con
FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."'";
                                      }
                                      
                                      if(isset($_POST['select_subject'])){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '".$_POST['select_subject']."' ";
                                      }

                                      if(isset($_POST['select_course'])){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '".$_POST['select_course']."' ";
                                      }
                                      //$records = $records."decode(CONNECTOR_COL_ODU,'NULL', '')";
                                      $records = $records."GROUP BY SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU ORDER BY SUBJ_CODE_FROM_SCHOOL ASC, CRSE_NUMB_FROM_SCHOOL"; 
                                      $result = oci_parse($conn, $records);















<td><?php echo $table_res['EQUIVALENT'][$i]?></td>
                                 <td><?php echo $table_res['EQUIVALENTCOURSE'][$i]?></td>






                                 SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU, listagg(CONCAT(CONCAT(CONCAT(CONCAT(SUBJ_CODE_INST_ODU, ' '), CRSE_NUMB_INST_ODU), '<BR>'), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR> ', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP(ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENT, listagg(CONCAT(CONCAT(INST_TITLE_ODU,'<BR> '), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR>', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP( ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENTCOURSE
                                      FROM V_WX_EQUIVALENCY_LIST








                                      <script>
        function getCookie(cname){
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i< ca.length; i++){
            var c = ca[i];
            while(c.charAt(0) == ' '){
              c = c.substring(1);
            }
            if(c.indexOf(name) == 0){
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
        function getAllCookies(){
          var pairs = document.cookie.split(';');
          var cookies = {};
          for(var i = 0; i < pairs.length; i++){
            var pair = pairs[i].split("=");
            cookies[(pair[0] + '').trim()] = unescape(pair[1]); 
          }
          return cookies;
        }

      function checkCookie(){
        var cookies = getAllCookies();
        var favcount = 0;
        for(var name in cookies){
          var user = getCookies($.trim(name));
          if(user != ""){
            var array_user = user.split(',');
            var i;
            var tabledata = $('#myTable').DataTable({
              retrieve: true,
              "iDisplayLength": 25,
              columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
              }],
              select: {
                style: 'multi',
                selector: 'td:first-child'
              },
              order: [
                [1, 'asc']
              ],
            });
            $('[data-toggle="tooltip"]').tooltip();
            for(i =0; i < array_user.length; i++){
              var fav_cookie = array_user[i];
              $.ajax({
                type: "POST"
                url: "ajax/courses.ajax.php",
                data:{
                  cookie_fav: fav_cookie
                },
                success: function (data){
                  $('#favtable tr:last').after(data);
                  $(".badgecount").html($('#favtable tr').length - 1);
                }
              });
              $("#tablechange tr").each(function (){
                if(fav_cookie == $(this).children('td:nth-child(2)').attr('id')){
                  $(this).addClass('selected');
                  tabledata.rows($(this)).select();
                  $(this).addClass("active1";
                  $(".active1").css({
                    "background-color": "white",
                    "color": "black"
                  });
                  $(this).children('td:nth-child(1)').tooltip('disable');
                }
              });
            }
          }else {

          }
        }
      }

      $document.on("click", ".emailsend", function(){
        function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i < ca.length; i++){
            var c = ca[i];
            while(c.charAt(0) == ''){
              c = c.substring(1);
            }
            if(c.indexOf(name) == 0){
              return c.substring(name.length, c.length);
            }
          }
          return " ";
        }
      function getAllCookies(){
        var pairs = document.cookie.split(';');
        var cookies = {};
        for(var i = 0; i < pairs.length; i++){
          var pairs = pairs[i].split("=");
          cookies[(pair[0] + '').trim()] = unescape(pair[1]);
        }
        return cookies;
      }
      var firstn = $("fname").val();
      var lastn = $(".lname").val();
      var ename = $(".eid").val();
      var favta = $(".loaction").html();
      var cookies = getAllCookies();
      for(var name in cookies){
        var user = getCookies($.trim(name));
        if(user != ""){
          var array_user = user.split(',');
          var i;
          for (i = 0; i < array_user.length; i++){
            var fav_cookie = array_user[i];
            $.ajax({
              type: "POST",
              url: "favorites.php",
              data:{
                firstname: firstn,
                lastname: lastn,
                emailid: ename,
                cook_fav: fav_cookie
              },
              success: function(data){

              }
            });         }
        }
      }else{

      }
      }
      $.ajax({
        type: "POST",
        url : "email.php",
        data: {
          firstname: firstn,
          lastname: lastn,
          emailid: ename,
          emailht: favta,
        },
        success: function(data){
          $("reqemail").html(data);
        }
      });
    });
       </script>

















       <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="search School" onkeyup="mySchool">

       <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="search Subject">
       <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search Course Number">


       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-<3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"/>