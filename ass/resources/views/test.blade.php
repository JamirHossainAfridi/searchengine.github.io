<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <h2 align="center">I want to check</h2>

  <div  id="search">  
    <fieldset >
				<legend>Search:</legend>
          Search BY :
          <select name="Search1" id="Search1">
            <option value="Name">Name</option>
            <option value="Phone No:">Phone</option>
            <option value="Address">Address</option>
          </select>
          
        Text <input type="text" name="fname" id="textvalue1">
					<br/><br/>
					
					<input type="submit"  onclick="getInputValue1()"/>
			</fieldset>
    </div>

      <div  style="display:none;" id="checking1">
      <p> More than One Data Retured.</p>
      <p>Search More specificly?</p>
        <button id="yes"onclick="getInputValueYes()">YES</button>
        <button id="no" value="no"onclick="getInputValueNo()">Show All</button>
      </div>

    <div style="display:none;" id="form2_Name">  
    <fieldset >
				<legend>Search 2:</legend>
        Search BY :
          <select name="Search2" id="Search21">
          </select>
        Text <input type="text" id="fname11">
					<br/><br/>
					
					<input type="submit" onclick="getName()"/>
			</fieldset>
    </div>

    <div  style="display:none;" id="checking2">
      <p>More than One Data.</p>
      <p>Search More specificly?</p>
        <button id="yes"onclick="getInputValueYes1()">YES</button>
        <button id="no" onclick="getInputValueNo1()">Show All</button>
      </div>

    <!-- search 3 start -->
    <div style="display:none;" id="form3_Name">  
    <fieldset >
				<legend>Search 3 :</legend>
        Search BY :
          <select name="Search3" id="Search3">
          </select>
        Text <input type="text" id="inp3">
					<br/><br/>	
					<input type="submit" onclick="getFinalData()"/>
			</fieldset>
    </div>

    <div style="display:none;" id="table1">  
      <table border="1" style="width:100%"id="tabledata">
      </table> 
    </div>

    <div style="display:none;" id="message">
        <p>No Data Found. Please Search Again...</p>
    </div>

    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
     


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getInputValue1(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("textvalue1").value;
            var inputVal1 = document.getElementById("Search1").value;

            $("#table1").hide();
            $("#checking1").hide();
            $("#form2_Name").hide();
            $("#form3_Name").hide();
            // $("#form2_Name").empty();
            // $("#form3_Name").empty();
            var inputno = document.getElementById("no").value;

            $("#message").hide();
            $.ajax({
                
                url:"{{ url('test') }}/"+inputVal1+"/"+inputVal,
                // url: "test"+inputVal1,
                type:'get',
                success:function(response){
                    let len = response.length;
                    console.log(response);
 
                        if(len>1){
                        $("#checking1").show();
                        

                        }
                        else if(len<1)
                        {
                          $("#message").show();
                          
                        }
                        else 
                        {
                            $("#tabledata").empty();
                          $("#tabledata").append('<th>'+"Name" +'</th><th>'+"Phone No:"  +'</th><th>' +"Address" +'</th>');
                            for(var i=0;i<response.length;i++){
                            $("#tabledata").append('<tr><td>' + response[i]['Name']+ '</td><td>'+ response[i]['Phone No:'] +  '</td><td>'+ response[i]['Address'] + '</td></tr>');
                         }
                            $("#table1").show();
                          
                          
                        
                        }
                       

     
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });


        // });
 
     
              }
              //first search end 
              function showValues1(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("textvalue1").value;
            var inputVal1 = document.getElementById("Search1").value;
            $("#table1").hide();
            $("#checking1").hide();

            $("#message").hide();
            $.ajax({
                
                url:"{{ url('test') }}/"+inputVal1+"/"+inputVal,
                // url: "test"+inputVal1,
                type:'get',
                success:function(response){
                    let len = response.length;
                    console.log(response);
 
                            $("#tabledata").empty();
                          $("#tabledata").append('<th>'+"Name" +'</th><th>'+"Phone No:"  +'</th><th>' +"Address" +'</th>');
                            for(var i=0;i<response.length;i++){
                            $("#tabledata").append('<tr><td>' + response[i]['Name']+ '</td><td>'+ response[i]['Phone No:'] +  '</td><td>'+ response[i]['Address'] + '</td></tr>');
                         }
                            $("#table1").show();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

              }
              //second search start
              function getInputValueYes(){
                $("#checking1").hide();
                var inputVal1 = document.getElementById("Search1").value;
                var inputVal = document.getElementById("textvalue1").value;
                $("#Search21").empty();
                if(inputVal1==="Name")
              {
                $("#Search21").append('<option value="Phone No:">Phone No:</option>');
                       
                   $("#Search21").append('<option value="Address">Address</option>');
                $("#form2_Name").show();
                
              }
                else if(inputVal1==="Phone No:")
                {
                  $("#Search21").append('<option value="Name">Name</option>');
                       
                       $("#Search21").append('<option value="Address">Address</option>');
                    $("#form2_Name").show();
                }
                else{
                  $("#Search21").append('<option value="Name">Name</option>');
                       
                       $("#Search21").append('<option value="Phone No:">Phone No:</option>');
                    $("#form2_Name").show();
               }

            }

            function getName(){
              $("#form3_Name").hide();
              $("#table1").hide();
              $("#message").hide();
              $("#checking1").hide();
              
                var select1 = document.getElementById("Search1").value;
                var inputVal1 = document.getElementById("textvalue1").value;
                var select2 = document.getElementById("Search21").value;
                var inputVal2 = document.getElementById("fname11").value;
                console.log(select1);
                console.log(inputVal2);
            $.ajax({
                
                url:"{{ url('test') }}/"+select1+"/"+inputVal1+"/"+select2+"/"+inputVal2,
                // url: "test"+inputVal1,
                type:'get',
                success:function(response){
                    let len = response.length;
                    console.log(response);
                        if(len>1){
                        $("#checking2").show();
                        
                     }
                     else if(len<1)
                        {
                          $("#message").show();
                          
                        }
                        else{
                          $("#tabledata").empty();
                          $("#tabledata").append('<th>'+"Name" +'</th><th>'+"Phone No:"  +'</th><th>' +"Address" +'</th>');
                          for(var i=0;i<response.length;i++){
                            $("#tabledata").append('<tr><td>' + response[i]['Name']+ '</td><td>'+ response[i]['Phone No:'] +  '</td><td>'+ response[i]['Address'] + '</td></tr>');
                         }
                            $("#table1").show();
                        }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

            }

            function showValues2(){
              $("#form3_Name").hide();
              $("#table1").hide();
              $("#message").hide();
              $("#checking1").hide();

                var select1 = document.getElementById("Search1").value;
                var inputVal1 = document.getElementById("textvalue1").value;
                var select2 = document.getElementById("Search21").value;
                var inputVal2 = document.getElementById("fname11").value;
                console.log(select1);
                console.log(inputVal2);
            $.ajax({
                
                url:"{{ url('test') }}/"+select1+"/"+inputVal1+"/"+select2+"/"+inputVal2,
                // url: "test"+inputVal1,
                type:'get',
                success:function(response){
                    let len = response.length;
                    console.log(response);
                        
                          $("#tabledata").empty();
                          $("#tabledata").append('<th>'+"Name" +'</th><th>'+"Phone No:"  +'</th><th>' +"Address" +'</th>');
                          for(var i=0;i<response.length;i++){
                            $("#tabledata").append('<tr><td>' + response[i]['Name']+ '</td><td>'+ response[i]['Phone No:'] +  '</td><td>'+ response[i]['Address'] + '</td></tr>');
                         }
                            $("#table1").show();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

            }

            function getInputValueYes1(){
                $("#checking2").hide();
                var inputVal1 = document.getElementById("Search1").value;
                var inputVal = document.getElementById("textvalue1").value;
                var select2 = document.getElementById("Search21").value;
                $("#Search3").empty();
                if(inputVal1==="Name" && select2==="Phone No:" || inputVal1==="Phone No:" && select2==="Name" )
              {
                       
                   $("#Search3").append('<option value="Address">Address</option>');
                $("#form3_Name").show();

              }
                else if(inputVal1==="Address" && select2==="Phone No:" || inputVal1==="Phone No:" && select2==="Address")
                {
                  $("#Search3").append('<option value="Name">Name</option>');
                    $("#form3_Name").show();
                }
                else{
                       
                       $("#Search3").append('<option value="Phone No:">Phone No:</option>');
                    $("#form3_Name").show();
               }

            }

  ///ekan theke kaj baki

            function getFinalData() {
              var select1 = document.getElementById("Search1").value;
                var inputVal1 = document.getElementById("textvalue1").value;
                var select2 = document.getElementById("Search21").value;
                var inputVal2 = document.getElementById("fname11").value;
                var select3 = document.getElementById("Search3").value;
                var inputVal3 = document.getElementById("inp3").value;
                console.log(select1);
                console.log(inputVal2);
                $("#message").hide();
                $("#checking1").hide();
                $("#checking2").hide();
            $.ajax({
                
                url:"{{ url('test') }}/"+select1+"/"+inputVal1+"/"+select2+"/"+inputVal2+"/"+select3+"/"+inputVal3,
                // url: "test"+inputVal1,
                type:'get',
                success:function(response){
                 
                  $("#tabledata").empty();
                          console.log(response);
                          let len = response.length;
                           if(len<1)
                        {
                          $("#message").show();
                          
                        }
                        else
                        {
                          $("#tabledata").append('<th>'+"Name" +'</th><th>'+"Phone No:"  +'</th><th>' +"Address" +'</th>');

                          for(var i=0;i<response.length;i++){
                            $("#tabledata").append('<tr><td>' + response[i]['Name']+ '</td><td>'+ response[i]['Phone No:'] +  '</td><td>'+ response[i]['Address'] + '</td></tr>');
                         }
                            $("#table1").show();
                        }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
            }
            function getInputValueNo(){
              showValues1();

              $("#checking1").hide();
            }
            function getInputValueNo1(){
              showValues2();
              $("#checking2").hide();
            }


        </script>
</html>


