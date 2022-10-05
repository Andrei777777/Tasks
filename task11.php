//task11//



<?php 

$Number1 = $_POST["Number1"];
$Number2 = $_POST["Number2"];
$operator = $_POST["operator"];
$result = '';
if  (is_numeric($Number1) && is_numeric($Number2)) {

      switch ($operator) {

          case "Addition" :

            $result = $Number1 + $Number2;

            break;

          case "Substraction" : 
            
            $result = $Number1 - $Number2;

            break;

          case "Multilication" :
            
            $result = $Number1 * $Number2;

            break;

          case "Division" :
            
            $result = $Number1 / $Number2;

            break;

      }

}

?>

<body>

    <div>   

        <h1> Calculator</h1>

        <form action="" method="post" id="quiz-form">
              <p>
                  <input type="number" name="Number1" id="Number1" required="required" value="<?php echo $Number1; ?>" /> <b>Number1</b>
              </p>

              <p>
                  <input type="number" name="Number2" id="Number2" required="required" value="<?php echo $Number2; ?>" /> <b>Number2</b>
              </p>

              <p>
                  <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>result</b>
              </p>
           
           
           

           <input type="submit" name="operator" value="Addition" />
           <input type="submit" name="operator" value="Substract" />
           <input type="submit" name="operator" value="Multiplicaton" />
           <input type="submit" name="operator" value="Division" />

        </form>

    </div>

</body>