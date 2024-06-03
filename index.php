<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
       
        class Intern {
           private $name;
           private $age;
           private $organization;
           private $id;
           private $department;
           
        //    public $workDay=array("sun","mon","tue","wed", "thu");
              public function __construct($name = null, $age = null, $organization =null, $id =null, $department =null) {
                 $this->name = $name;
                 $this->age = $age;
                 $this->organization = $organization;  
                 $this->id = $id;  
                 $this->department = $department;
                //  $this->workDay = $workDay;
  }
  function set_name() {
    $this->name = $name;
}
  function get_name() {
             return $this->name;
          
  }
  function set_age() {
    $this->age = $age;
}
  function get_age() {
    return $this->age;
 
}
function set_org() {
    $this->organization = $organization;
}
function get_org() {
    return $this->organization;
 
}
function set_id() {
    $this->id = $id;
}
function get_id() { 
    return $this->id;
}
function set_department() {
    $this->department = $department;
}
function get_department() {
    return $this->department;
}
        }
$S1 = new Intern("Md. Al-Amin", 26,"CodeTree", 19303055, "Full-stack development" );       



echo $S1->get_name();
echo "<br>";
echo $S1->get_age();
echo "<br>";
echo $S1->get_org();
echo "<br>";
echo $S1->get_id();
echo "<br>";
echo $S1->get_department();
        ?>    

</body>
</html>