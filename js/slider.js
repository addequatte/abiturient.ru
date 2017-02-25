function Get(id){
	return document.getElementById(id);
}
var slide = 0, radio_check = 1;
function move_slide(move, count){
	Get('radio-' + radio_check).style.background = 'none';
	if(move == "next"){
		if(count > 1){radio_check++; slide++;}
		if(slide == count){slide = 0; radio_check = 1;}
		}else{
			radio_check--; slide--;
			if(slide == -1){slide = count - 1; radio_check = count;}
		}
		Get('slide-1').style.marginLeft = -slide*100 +'%';
		Get('radio-' + radio_check).style.background = '#fff';
}