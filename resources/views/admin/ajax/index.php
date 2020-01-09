<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {

                           /**********************Display Post*****************************/

        setInterval(function () {

            update_post();

        },500);// setinterval function end

        function update_post() {


            $.ajax({
                url: 'display_post.php',
                type: 'POST',
                success: function (show_post) {
                    if (!show_post.error) {
                        $('#show_post').html(show_post);
                    } //end if

                } //success function
            }); //ajax end
        }//update_post

        //End Display Post
                                  /**********************Search Post*****************************/


        $('#search').keyup(function(){

            var search = $('#search').val();
            $.ajax({

                url:'Connection.php',
                data:{'search':search},
                type: 'POST',
                success:function(data){
                    if(!data.error) {
                        $('#result').html(data);

                    }//end if
                }//end success
            }); //ajax search end
        });//key up function(End Search)

                                  /*******************Add Post***********************/

        $("#add_post_form").submit(function (a) {
            a.preventDefault();
                    var posts =$(this).serialize();
                    var url = $(this).attr('action');

            $.post(url,posts, function(table_data) {//post=>تمرير البيانات
                $('#post_result').html(table_data);
            });//end post
        });// add_post end


    });//ready function end
</script>

<div id="container" class="col-xs-6 col-xs-offset-3 ">
 <div class="row">
    <h1>Search Our Database</h1>

    <input class="form-control col-sm-6 " style="margin: auto " placeholder="Search Her" type="text" name="search" id="search">
    <br>
    <br>
    <h2  class="bg-success"style="margin: auto " id="result">
    </h2>
 </div>
    <br>
    <br>
    <div class="row">

        <form method="post" id="add_post_form" class="col-xs-6" action="add_post.php">
              <div class="form-group">

                  <input type="text" placeholder="Title" class="form-control" name="title"  id="title">

              </div>
            <div class="form-group">
                  <input type="submit" class="btn btn-primary"  value="add" >
              </div>
        </form>

    </div>

    <div class="row">
        <div class="col-xs-6">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody id="show_post"></tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
