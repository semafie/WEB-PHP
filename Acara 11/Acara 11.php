<?php
interface Bird {
    public function makesound();
}
class Perkutut implements Bird{
    public function makesound(){
        echo "Kur Kur<br>";
    }
}
$burung = new Perkutut();
$burung->makesound();
?>
<?php
interface Animal {
    public function makesound();
}
class Anjing implements Animal{
    public function makesound(){
        echo "gug gug<br>";
    }
}
class Kucing implements Animal{
    public function makesound(){
        echo "Meow<br>";
    }
}
class tikus implements Animal{
    public function makesound(){
        echo "cit cit<br>";
    }
}
$kucing = new tikus();
$anjing = new Kucing();
$tikus = new Anjing();
$opo = array($kucing,$anjing,$tikus);

foreach($opo as $opos){
    $opos->makesound();
}
?>
<?php
interface  Logger{
    public function log($message); 
}
class filelogger implements Logger{
    private $handle;
    private $logfile;

    public function __construct($filename, $mode = "w"){
        $this->logfile = $filename;
        $this->handle = fopen($filename,$mode)
        or die("could not open the log file");
    }
    public function log($message){
        $message = date("F j, Y,g:ia") . ": " .$message . "\n";
        fwrite($this->handle, $message);
    }
    public function __destructK(){
        if($this->handle){
            fclose($this -> handle);
        }
    }
}
class Databselogger implements Logger{
    public function log($message){
        echo sprintf ("Log %s to the database\n",$message);
    }
}
// $logger = new filelogger("./log.txt","w");
// $logger->log("PHP interface is awesome");

$loggers = [new filelogger("./log.txt"), new Databselogger()];
foreach ($loggers as $logger){
    $logger->log("Log message YAAA");
}