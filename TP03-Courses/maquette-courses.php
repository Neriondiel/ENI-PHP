<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liste de courses</title>

</head>
<body>
     <!-- Responsive navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Liste de courses</a>
            
        </div>
    </nav>
    <!-- .container +tab -->
    <section class="container">
        <!-- 100 % sur mobile et 33 % sur pc -->
        <div class="row">
            <div class="col-12 col-md-4 ">
                <h1>Liste de courses</h1>
                <form action="ajouter.php" method="POST">
                    <div class="mb-3">
                        <input 
                        aria-label="Item"
                        class="form-control" 
                        name="item" 
                        placeholder="Item">
                    </div>
                
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-plus"></i>
                    </button>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        session_start();
                        //var_dump($_SESSION["courses"]);
                        //$_SESSION["courses"] = ["pomme","poire"];
                        if(isset($_SESSION["courses"])){
                            $i=0;
                            foreach($_SESSION["courses"] as $item){
                                ?>
                                <tr>
                                    <td><?=$item?></td>
                                    <td>
                                        <a href="enlever.php?indice=<?=$i?>" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>   
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $i++;                            
                            }
                        } else { ?>
                            <tr>
                                <td>Le tableau est vide</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>               
            </div>
        </div>
    </section>
 <!-- Footer-->
 <footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy; Comme je n'aime pas ... 2022</p></div>
</footer>
</body>
</html>