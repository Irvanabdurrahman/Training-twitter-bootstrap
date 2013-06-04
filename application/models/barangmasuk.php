<?php
class Barangmasuk extends Eloquent {

public function user()
	{
      return $this->belongs_to('User', 'username');
    } 
	
public function users()
	{
        return $this->has_many('User');
    }
}
?>

