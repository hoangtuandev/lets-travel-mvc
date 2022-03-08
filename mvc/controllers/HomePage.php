<!-- NOT GO TRAVEL -->
<?php
class HomePage extends Controller{
    function SayHi(){
        $tuan = $this->models("SinhVien") ;
        echo $tuan->GetSV() ;
    }
    
    function Show($a, $b){
        $tuan = $this->models("SinhVien") ;

        $tong =  $tuan->tong($a, $b) ;
        
        $this->views("Aodep", ["Number"=>$tong,
                                "Color"=>"red",
                                "Page"=>"new",
                                "Sothich"=>["A", "B", "C"],
                                "SV" => $tuan->dsSinhVien()]) ;
    }
}
