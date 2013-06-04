<?php
// application/models/user.php
// The model for Users. 
// A user has many posts.
 
class User extends Eloquent {
 
	//for suplier
	public function suplier(){
      return $this->belongs_to('Suplier', 'id');
    } 
	
    public function supliers(){
        return $this->has_many('Suplier');
    }
	
	//for barang
	 public function barang(){
      return $this->belongs_to('Barang', 'id');
    } 
	
    public function barangs(){
        return $this->has_many('Barang');
    }
	
	//for barangmasuk
	 public function barangmasuk(){
      return $this->belongs_to('Barangmasuk', 'id');
    } 
	
    public function barangmasuks(){
        return $this->has_many('Barangmasuk');
    }
}
?>