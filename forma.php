
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
       
    <body>

                <form method="POST" action="formjs.php">

                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <div class="col-6">
                        <label for="phone" class="form-label">Phone </label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="col-md-6">
                        <label for="Number" class="form-label">Enroll Number	</label>
                        <input type="text" class="form-control" name="Number">
                    </div>
                    <div class="col-md-6">
                        <label for="date" class="form-label">Date of admission		</label>
                        <input type="date" class="form-control" name="date">
                    </div>

                

                    <div class="col-12">
                    <input type="submit" name="save" value="save">
                    </div>
                </form>        
            
  </body>
</html>