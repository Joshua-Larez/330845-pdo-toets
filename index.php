<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>pdo-toets</title>
  </head>
  <body>
    <h1>Maak je eigen pizza</h1>

    <div class="container">
        <div class="text-center">
            <form action="./create_script.php" method="post"> 


                <h6>Bodemformaat</h6>
                    <select class="form-select" name="formaat" aria-label="Default select example">
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                    </select>
                <label for="formaat"></label>


                <h6>Saus</h6>
                    <select class="form-select" name="saus" aria-label="Default select example">
                        <option value="tomatensaus">Tomatensaus</option>
                        <option value="extra-tomatensaus">Extra-Tomatensaus</option>
                        <option value="spicy-tomatensaus">Spicy-tomatensaus</option>
                        <option value="bbq-saus">BBQ-saus</option>
                        <option value="creme-friache">Creme-Friache</option>
                    </select>
                <label for="saus"></label>

                <div>
                    <h6>Pizza Toppings</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="toppings" value="vegan" checked>
                        <label class="form-check-label" for="toppings">Vegan</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="toppings" value="vegetarisch">
                        <label class="form-check-label" for="toppings">Vegetarisch</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="toppings" value="vlees">
                        <label class="form-check-label" for="toppings">Vlees</label>
                    </div>
                </div>
                <br>

                <h6>Kruiden</h6>
                <div>
                    <div class="form-check">
                        <label class="form-check-label" for="Kruiden">Peterselie</label>
                        <input class="form-check-input" type="checkbox" name="Kruiden[]" value="Peterselie" >
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="Kruiden">Oregano</label>                        
                        <input class="form-check-input" type="checkbox" name="Kruiden[]" value="Oregano" checked>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="Kruiden">Chili flakes</label>                        
                        <input class="form-check-input" type="checkbox" name="Kruiden[]" value="Chiliflakes">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="Kruiden">Zwarte pepper</label>                        
                        <input class="form-check-input" type="checkbox" name="Kruiden[]" value="Zwartepeper">
                    </div>
                </div>
                <br>

                <div class="d-grid gap-2">
                    <button type="submit"  value="submit" class="btn btn-primary">Bestel</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>