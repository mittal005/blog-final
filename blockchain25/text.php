<html>
<head>
 <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
               <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
   	 <div class="container">
            <div class="bs-example" data-example-id="basic-forms">
                <form>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Editor</label>
                        <textarea name ="text" class="form-control" id="textArea" rows="3" placeholder="Textarea"></textarea>
                    </div>
                     <input type="submit" class="btn btn-primary" name="submit" value ="Submit">
                </form>
            </div>
        </div>
        <script>
        //Load editor and replace it with textarea
        CKEDITOR.replace( 'textArea' );
    </script>
   </body>
   </html>