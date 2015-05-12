
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemSeeder extends Seeder{
	
	public function run(){
		$names = $this->generateItems();
		$mult = 1;
		$rarity = 'COMMON';
		foreach($names as $item){
			if(strpos($item, 'Cloth') !== false){
				$mult = 1;
			}
			elseif(strpos($item, 'Iron') !== false){
				$mult = 3;
			}
			elseif(strpos($item, 'Bronze') !== false){
				$mult = 5;
			}
			elseif(strpos($item, 'Quicksilver') !== false){
				$mult = 10;
			}
			elseif(strpos($item, 'Diamond') !== false){
				$mult = 25;
			}
			if(strpos($item, 'Helmet') !== false){
				$slot = 'HEAD';
			}
			elseif(strpos($item, 'Chestplate') !== false){
				$slot = 'CHEST';
			}
			elseif(strpos($item, 'Pants') !== false){
				$slot = 'LEGS';
			}			
			elseif(strpos($item, 'Spaulders') !== false){
				$slot = 'SHOULDERS';
			}
			else{
				$slot = 'WEAPON';
			}
			if(strpos($item, 'Quicksilver') !== false){
				$rarity= 'RARE';
			}
			if(strpos($item, 'Diamond') !== false){
				$rarity = 'EPIC';
			}
			
			DB::table('item')->insert(['name' => $item, 'rarity' => $rarity, 'slot'  => $slot, 'bonus_str' => 2*$mult, 'bonus_dex' => 4*$mult, 'bonus_int' => 3*$mult, 'bonus_luk' => 1*$mult, 'price' =>5*$mult]);
		}
		
	}
	
	
	public function generateItems(){
		$attrList= ['Monkey', 'Bear', 'Turtle'];
		$matList = ['Cloth','Iron','Bronze', 'Quicksilver','Diamond'];
		$typeList= ['Helmet','Chestplate','Pants','Spaulders'];
		
		$nameList = array();
		foreach($typeList as $item){
			foreach($matList as $material){
				foreach($attrList as $attr){
					$toPush = $material." ".$item." of the ".$attr;
					array_push($nameList, $toPush);
				}
			}
		}
		$typeList = ['Knife','Staff', 'Sword', 'Bow', 'Axe'];
		foreach($typeList as $item){
			foreach($matList as $material){
				if($material == 'Cloth'){
					continue;
				}
				foreach($attrList as $attr){
					$toPush = $material." ".$item." of the ".$attr;
					array_push($nameList, $toPush);
				}
			}
		}
		return($nameList);
	}
}
